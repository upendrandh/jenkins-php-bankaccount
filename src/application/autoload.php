<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bankaccount\\application' => '/Application.php',
                'bankaccount\\controller\\bankaccount' => '/controller/BankAccount.php',
                'bankaccount\\controller\\bankaccountlist' => '/controller/BankAccountList.php',
                'bankaccount\\controller\\redirecttobankaccountlist' => '/controller/RedirectToBankaccountList.php',
                'bankaccount\\factory' => '/Factory.php',
                'bankaccount\\mapper\\bankaccount' => '/mapper/BankAccount.php',
                'bankaccount\\model\\bankaccount' => '/model/BankAccount.php',
                'bankaccount\\model\\bankaccountexception' => '/model/BankAccountException.php',
                'bankaccount\\testing\\factory' => '/testing/Factory.php',
                'bankaccount\\view\\bankaccount' => '/view/BankAccount.php',
                'bankaccount\\view\\bankaccountlist' => '/view/BankAccountList.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd