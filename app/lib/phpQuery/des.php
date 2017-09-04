<?php
header('content-type:text/html;charset=utf-8');
/**
 * des Helper Class
 */
class DES
{

    /**
     * DES加密 (需要打开php.ini的extension=php_mcrypt.dll)
     * @param string $input
     * @param string $key
     * @return string
     */
    public static function encode($input, $key, $iv)
    {

        //填充算法 PKCS7
        $input = DES::addPKCS7Padding($input);

        //打开算法和模式对应的模块  加密算法 3DES 加密模式 CBC
        $td = mcrypt_module_open(MCRYPT_3DES, '', 'cbc', '');

        //设置加密的key 以及初始化向量
        mcrypt_generic_init($td, $key, $iv);

        //加密
        $encrypted_data = mcrypt_generic($td, $input);


        //对加密模块进行清理工作
        mcrypt_generic_deinit($td);

        //关闭加密模块
        mcrypt_module_close($td);

        //加加密的数据进行base64编码
        $encode = trim(chop(base64_encode($encrypted_data)));

        return $encode;
    }

    /**
     * DES解密
     * @param string $input
     * @param string $key
     * @return string
     */
    public static function decode($input, $key, $iv)
    {
        //反编码
        $input = trim(chop(base64_decode($input)));

        //打开算法和模式对应的模块  加密算法 3DES 加密模式 CBC
        $td = mcrypt_module_open(MCRYPT_3DES, '', 'cbc', '');

        //设置加密的key 以及初始化向量
        mcrypt_generic_init($td, $key, $iv);

        //解密的数据
        $decrypted_data = mdecrypt_generic($td, $input);

        //对加密模块进行清理工作
        mcrypt_generic_deinit($td);

        //关闭加密模块
        mcrypt_module_close($td);

        //去除 PKCS7 填充
        $decrypted_data = DES::stripPKSC7Padding($decrypted_data);

        return $decrypted_data;
    }

    //PKCS7填充
    private static function addPKCS7Padding($source)
    {
        //获得加密算法的分组大小 8
        $block = mcrypt_get_block_size(MCRYPT_3DES, 'cbc');

        //计算要填充的长度
        $pad = $block - (strlen($source) % $block);

        //填充字符串
        if ($pad <= $block) {

            //chr — 返回指定的字符 ASCII
            $char = chr($pad);

            //填充字符串
            $source .= str_repeat($char, $pad);
        }
        return $source;
    }

    //去除PKCS7的填充
    private static function stripPKSC7Padding($source)
    {
        //获得加密算法的分组大小 8
        $block = mcrypt_get_block_size(MCRYPT_3DES, 'cbc');

        $char = substr($source, -1, 1);

        //返回字符的 ASCII 码值
        $num = ord($char);

        if ($num > 8) {
            return $source;
        }

        $len = strlen($source);
        for ($i = $len - 1; $i >= $len - $num; $i--) {
            if (ord(substr($source, $i, 1)) != $num) {
                return $source;
            }

        }
        $source = substr($source, 0, -$num);

        return $source;
    }
}