<?php

return [
    'alipay' => [
        'app_id'         => '2016092800615584',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvHfK4LnF+ngDhuohmQA42JrjXyRO/dTmstQsS8zFQMzK5qiIwrIzjsdnI2MbCloh5VKSDFTk1oe+LpVgzQ7qp9IpO2zX3AR8S8cLa9ATNNhIB57f6SnUsI0pDVxT/lW3H8ny3ON+DJb5ncLqQU9ex8brrMR+JPK0CoE7evZikI0HGY8pqOAQgm/etCt6eD1hWQxpLn6x7gV3zZZuyeLESNojOyRNWcyCDMT3db6G2VAAamk8LIb9HGKWxm0rM3AZDL+xHXAmDMi+tzkqIgu5jnntXD9n9/iNzm7Zaeu2F5Lxiy7xLSPYpfE1ECRZF05seOtaqQYhnAy1Z7PPgCL5YQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAsPidcZ3Co7KVwN4zT40NfgAjvPbBvmU0pjlDirdtMGd3PKsz5LJILp5aPZs4jzfSuTGT1mU88RwlzKeD5O+RXcrhv8rhODZBiceg91G0VbmFNlwCNbML8EKpn/jx+lx2v/WvDLEvFcy9nuNuKG5s5DJcJHGhwwbrQQ2rjEp5jtVjszA2ySTMK8qnsfrNL6OfinNbZ4HsjWrnwpYjfpJdnkVQWuFh1S8R/0SLSdNJgx+WVYX/TAxvBbpLOzrXPlZrXIli725w4NypPLZNvCYkf5OQ6ElHhSG9xzIepQ7PW047qKB5jx2cV1KcR4ePflhIfYE9vWQI0UfJXS5RerCK6wIDAQABAoIBABDHofYR5VCsMDLXXroeP7dAwCK8quYopnNUXqkad0ntpYqlGQiINvvkm93Xh+dcfah9oOzlMIAUESl0gLcGWBwyjnEnBW/VBSXRPdv1bUnri0v6MWNyFKG1UGwQqLD6b3AIFY74heRlQ117ZwiCX+TLOZ1jANmDIG9MooVs0lXOkWLWyKG8T+KxawmqhViLI4qaI7JXOssIGZWUGv9ZkNOR39Kz/kQCISZbsosKEuDlF2S+OgHCmhcrZYb7sHynheedZ3c2EoTr0pcYsiwjXRAKZbBaRvvMCugy4+a+N8O6HGG8P57YKQpyvpBWaxqm7NO+YiVh1htuEo3JBdI4ZWECgYEA5z29eE9Xt35PaC+BXuAMb7ndvtqHKu4To3bkVlAzylsjg3e01yWb8EFqNHB48DwSnuyh8dan2CJqSqK6Fsb2Kd/AQysmtIhuXI1epsUX5xK/UzZilpTvijq36t8wfnbuBpt9bQYAq7T9+c/ZCXHCXAV/2mKXrzFxaDEx92wKbdMCgYEAw+tZDwlLKPzbKp6BtghhtY1H+8dxBzwu81Cmp4ybC60lHwLSMoYIFZwJRFy/M/7KtZVRMcuNdplCyl1LIoBwYdJW9otIPb8Ul4szWKfkvvlVh31VtDsiBeRmlpRDEEwIiO9y6nYr265JYyTVrx62FDzg7d6hXHS81oHw1S+ZB4kCgYEA4aYNzeke36ASPMiepcZcXGozSJpWbD4GS+0oxFFfOIfXD+MwRQIeOUScLq/SVBtK0Gp5XVTqVK7AqjRBAxkD/biqFOF205SOnSIWywZpXMOej8TyT57mYS0La9Z/q+jCPRBeRJUm8mebrrp0QBMSZlm3eZPcEMlesR3QdHCpfKECgYEAwdRnic7CA00Wb/XdkoB8WqfqHZjVpDjQonyaRI2BH24vmZyq5L1h5i83o+C2cfSUDE4rxD4EON+sCpV+LiYwCTeWPdjSofQXpU5cgEuqrZ30FlXToroWEQpEzJjmOItgrklnwbsj7PVjOalJlzWlIiSQzAVEUzpTUU3BPMkYdzECgYEArdhD2hF+CvHPM30xXc2/yVC/Rhnw3W2uJdIDwIyibM+1asy3LEnzeJUt7pSM0km36QQehW7zu0qqZ4BMrcwsaJTVZ2kpCl3ATMKnM/HlrJKiqfNCJGPqIcEL85ftZDxh0NO6E+3MnzMahUh8shln4daPmW+n9pJzSXpEENT+dNA=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];