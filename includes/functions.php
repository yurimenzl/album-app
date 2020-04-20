<?php
    function anti_injection($sql)
    {
        // Remove SQL specific words
        $sql = preg_replace(preg_quote("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
        $sql = trim($sql);
        $sql = strip_tags($sql);
        $sql = addslashes($sql);
        return $sql;
    }
?>