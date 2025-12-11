# Reproduction steps

- Clone, composer install
- Wipe content directory
- Run `php artisan statamic:eloquent:export-entries`

Output will be

```
Exporting origin entries
 1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%
Exporting localized entries
 3/3 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%
Entries exported
```

`$ tree content`

```
content/
├── assets
│   └── assets.yaml
├── collections
│   ├── pages
│   │   ├── be_nl
│   │   │   └── home.md
│   │   ├── greece_english
│   │   │   ├── home.1.md
│   │   │   ├── home.2.md
│   │   │   ├── home.3.md
│   │   │   └── home.md
│   │   ├── ie_ga
│   │   │   └── home.md
│   │   └── tr_tr
│   │       └── home.md
│   └── pages.yaml
├── globals
├── navigation
├── taxonomies
└── trees
    └── collections
        └── pages.yaml
```

And the other languages / sites have no origin. Database looks like this:

```
| id                                   | site           | origin_id | published | slug | uri | date | order | collection | blueprint | data                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | created_at          | updated_at          |
|--------------------------------------|----------------|-----------|-----------|------|-----|------|-------|------------|-----------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|---------------------|---------------------|
| a5df7bfd-73d1-455e-8c24-e5fc48d1ebbc | tr_tr          | home      | 0         | home | /   |      |     1 | pages      | page      | (truncated) | 2025-12-11 19:44:35 | 2025-12-11 19:44:35 |
| c990ef5c-6d81-411e-9dac-5b012c2d8355 | be_nl          | home      | 1         | home | /   |      |     1 | pages      | page      | (truncated) | 2025-12-11 19:44:40 | 2025-12-11 19:44:42 |
| dc0d4ef9-8d61-46e5-bd22-3135df819e7b | ie_ga          | home      | 0         | home | /   |      |     1 | pages      | page      | (truncated) | 2025-12-11 19:44:38 | 2025-12-11 19:44:38 |
| home                                 | greece_english |           | 1         | home | /   |      |     1 | pages      | pages     | {"title":"Home","template":"home","content":"## Welcome to your brand new Statamic site!\n\nNot sure what to do next? Here are a few ideas, but feel free to explore in your own way, in your own time.\n\n- [Jump into the Control Panel](\/cp) and edit this page or begin setting up your own collections and blueprints.\n- [Head to the docs](https:\/\/statamic.dev) and learn how Statamic works.\n- [Watch some Statamic videos](https:\/\/youtube.com\/statamic) on YouTube.\n- [Join our Discord chat](https:\/\/statamic.com\/discord) and meet thousands of other Statamic developers.\n- [Start a discussion](https:\/\/github.com\/statamic\/cms\/discussions) and get answers to your questions.\n- [Star Statamic on Github](https:\/\/github.com\/statamic\/cms) if you enjoy using it!\n"}                                                                             | 2025-11-12 11:04:09 | 2025-12-11 19:43:55 |
```
