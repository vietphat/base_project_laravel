<?php
return [
    [
        "codePage" => "Dashboard",
        "text" => "Trang 1",
        "icon" => "mdi mdi-speedometer",
        "routeName" => "dashboard",
    ],
    [
        "codePage" => "Account",
        "text" => "Trang 2",
        "icon" => "bx bx-ghost",
        "routeName" => "account",
        "childs" => [
            [
                "codePage" => "List-Account",
                "text" => "Trang 2",
                "icon" => "...",
                "routeName" => "admin.account.list",
            ],
            [
                "codePage" => "Add-Account",
                "text" => "Trang 2",
                "icon" => "...",
                "routeName" => "admin.account.add",
            ]
        ]
    ],
    [
        "codePage" => "User",
        "text" => "Trang 3",
        "icon" => "bx bx-user",
        "routeName" => "user",
        "childs" => [
            [
                "codePage" => "List-User",
                "text" => "Trang 3",
                "icon" => "...",
                "routeName" => "admin.user.list",
            ],
            [
                "codePage" => "Add-User",
                "text" => "Trang 3",
                "icon" => "...",
                "routeName" => "admin.user.add",
            ]
        ]
    ],
    [
        "codePage" => "Widgets",
        "text" => "Trang 4",
        "icon" => "bx bx-party",
        "routeName" => "admin.widgets",
    ]
];
