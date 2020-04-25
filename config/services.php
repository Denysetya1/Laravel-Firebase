<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'database_url' => env('FIREBASE_DATABASE_URL', 'https://tiktal-2508.firebaseio.com/'),
        'project_id' => env('FIREBASE_PROJECT_ID', 'tiktal-2508'),
        'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', 'a2ebba06d89f4407fe864ee67d58b62f4763f4bcs'),
        // replacement needed to get a multiline private key from .env
        'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCdpGJESNZS2ymV\nmNR/T8rZyDflYzfWdnQP5PzE2eGE2QMIsxsco6C43Rv9KffWeBXv18xpoZ6p0ySq\nuuJAqahaAlWY7+OWWIryR45RkD/qmeEkhU8fRKyBrni1myZTtNG+Wgau3hvmTECm\ntj30KMGfMI/fF0W20qZG8dc8clONK7c+N3gEp4EJyJoabWP6JPO2A9DV7Vkr805Q\nqPjId9KLENonwD08M7can+FRRnJqhVSJX/fN0V6p439GosqvmgHjmI3gmAcBuQF/\nvzy0m6E3UG7OmKJ2tc/vkz3XA4JR+7xqcDxlGRcVVstvESGWHJUpJshVrVFW5hIa\nryNMDZtrAgMBAAECggEAS6msLqklEXS2s2I8z/Rc4QWr6nIiSVHmaACY3+TRzOEa\nBzFsGGVjDYe22N6tYWeW49zYdHTJwiohJb74PGAR+U24huTRAAb0fdAhe314aCI+\ngTho3xGnmMDEmCnlDfUyXKI6JfFeQ72ipEHBX7C2KjF1RHcXk2XswA1wqMcY2h75\nfm5zbbanW+5U1/sr5VJt+LvdlxCqkMxI0F4ne2kNYH5KIuSqVuMXaTLN3bbOR9pf\naciORVcLyOFu83siNuU9xUaDPp/msf50E7sQme10Jcm7w5KIzrDmWihqfjIqEhhk\nj4/RhVayA8LIQSe0Da0a54lVY+RIaSwdNLaAS6cpkQKBgQDYbOa3LGwnqhz6Uz+t\nDIqwoxzHepmUyQXukU2RIjDGbhbUYz6vKSXUZzEAjhm9QIB8lpHVaSIc3kwpa0mH\niAVS0gMmrX/V6TYjtMVICwEgPmHl3iXDtkaVWGCMa/k6t/qpVQ+KZeTtXTWuSAGX\nk18Dc939pgHTSQWacDt76YssWwKBgQC6d8a87b/SmYqmGmkjgPBila9lKuKIA/Xk\n40KdxRf2v9J+LMk6i3F7WypcDVbXM7kKIQpJEXZEKxHuRmbNnDvsmoYBRJ+kWYY0\n5tAa3VbjgMWqx9fpDJKGbbfTPaFV+/ace1Zsgl6yJBJZvXGjf1GrJND0BQyeX1rj\nMV6tRZC6MQKBgBFNC1iDRZYaJDzioMl9oiyirW9I3rQlKcM7fF7ow8tpC4wo7t7j\nxDFpmmI3+djGKj9LbhcIU4DJSH9bI0KhXgOT5EqYPgrknL5X+hlbP9jLA9pzWsN9\nc8EGkplHHGJUSMZ2lUp0AMv00pC/EtmCH2tQPOPE/IpeYQNKi4bJUaXXAoGAUAw3\nLsfJfzkWwjO4StuBVnD3uLBuSwGYP8gnwt7naK/0RuInCJDwCIqcZqP7UasMloKU\njcWHRcBPlEB4xW96chnryQOSnNUpvfAQClhWgpe3Q5dC4vLYvAjBz1c3uVfPCGIS\nOcbFrCe8EPY4oH15q8TERt0cC6jXtYxuHmgstyECgYEAz8PckqYPC/LC8Ln6jv85\nfITyALJQ5B6Y7rX01NCkB4qwnzLm4zCxinVDbVMImnxeq5zNM8NL70pZOe3lK4hP\nSzRehJPldihxERBSDKfvr0GqXhY3IENI4Zztz3g7znS5/GNPDNUZqOvDNmNvYMHU\nckkSgBSGiRWdD219mdfEwx0=\n')),
        'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-td0zf@tiktal-2508.iam.gserviceaccount.com'),
        'client_id' => env('FIREBASE_CLIENT_ID', '115996993624631794109'),
        'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-td0zf%40tiktal-2508.iam.gserviceaccount.com'),
    ]

];
