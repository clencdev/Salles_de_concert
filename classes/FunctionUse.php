<?php

class FunctionUse
{
    public static function redirect(string $location): void
    {
        header('Location: ' . $location);
        exit;
    }
}