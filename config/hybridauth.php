use Cake\Core\Configure;
 
return [
    'HybridAuth' => [
        'providers' => [
            'Facebook' => [
                'enabled' => true,
                'keys' => [
                    'id' => 'facebook-id',
                    'secret' => 'facebook-secret-key'
                ],
                'scope' => 'email, public_profile'
            ]
        ]
    ],
];
