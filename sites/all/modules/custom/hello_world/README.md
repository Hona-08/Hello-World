# 🌍 Hello World — Drupal 7 Custom Module

My first custom Drupal 7 module built from scratch to learn module development.

## Features
- Custom page route using `hook_menu()`
- Theme template using `hook_theme()` and `.tpl.php`
- Custom CSS styling
- Skill tags display with PHP loops

## Drupal 7 Hooks Used
| Hook | Purpose |
|------|---------|
| `hook_menu()` | Defines the `/hello` URL route |
| `hook_theme()` | Registers the template file |

## Installation
1. Copy `hello_world/` folder to `sites/all/modules/custom/`
2. Go to Admin → Modules → Enable "Hello World"
3. Visit `/hello` to see the page

## File Structure
```
hello_world/
├── hello_world.info
├── hello_world.module
├── hello_world.css
└── templates/
    └── hello-world.tpl.php
```

## Screenshot
<!-- Add your screenshot here -->

## Author
Hona — Learning Drupal 7 Module Development
This is for learning purpose