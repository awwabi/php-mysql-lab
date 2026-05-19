# PHP & MySQL Learning Lab — Instructor Guide

This document provides an organized instructor guide for Binus University’s PHP & MySQL Learning Lab. It covers the overall project, prerequisites, setup, a detailed lab plan (26 labs across four phases), and teaching guidelines for lecturers and guiding notes for students.

## 1. Project Overview
- PHP & MySQL Learning Lab for Binus University
- 26 labs across 4 phases
- Progressive structure: PHP Basics → MySQL Fundamentals → PHP-MySQL Integration → CRUD Capstone
- Designed for live coding during class and student exploration

## 2. Prerequisites
- XAMPP installed (Apache + MySQL)
- Basic understanding of programming concepts
- Basic understanding of database concepts
- A text editor (VS Code recommended)
- A web browser (Chrome recommended)

## 3. Setup Instructions (step-by-step)
1. Install XAMPP from apachefriends.org
2. Start Apache and MySQL from XAMPP Control Panel
3. Copy the php-mysql-lab/ folder to XAMPP's htdocs/ directory
4. Open phpMyAdmin: http://localhost/phpmyadmin
5. Go to SQL tab, paste contents of setup.sql, click Go
6. Open browser: http://localhost/php-mysql-lab/
7. Start with Lab 01!

## 4. Lab Overview Table
Below is a complete table of all 26 labs. Each row lists the lab number, phase, topic, format, and estimated duration. Format notes indicate whether students should implement TODOs or work with SQL in phpMyAdmin or PHP+MySQL integration tasks.

| Lab | Phase | Topic | Format | Duration |
|-----|-------|-------|--------|----------|
| 01 | PHP Basics | PHP Introduction | TODO | 30 min |
| 02 | PHP Basics | Variables | TODO | 30 min |
| 03 | PHP Basics | Data types | TODO | 30 min |
| 04 | PHP Basics | Operators | TODO | 30 min |
| 05 | PHP Basics | Control structures | TODO | 30 min |
| 06 | PHP Basics | Functions | TODO | 30 min |
| 07 | PHP Basics | Arrays | TODO | 30 min |
| 08 | PHP Basics | Forms handling | TODO | 30 min |
| 09 | PHP Basics | Superglobals | TODO | 30 min |
| 10 | PHP Basics | Basic file I/O | TODO | 30 min |
| 11 | MySQL Fundamentals | Introduction to SQL | TODO | 30 min |
| 12 | MySQL Fundamentals | SELECT statements | TODO | 30 min |
| 13 | MySQL Fundamentals | Filtering with WHERE | TODO | 30 min |
| 14 | MySQL Fundamentals | Joins (INNER/LEFT) | TODO | 30 min |
| 15 | MySQL Fundamentals | Aggregations (COUNT, SUM, AVG) | TODO | 30 min |
| 16 | MySQL Fundamentals | Data types & constraints | TODO | 30 min |
| 17 | MySQL Fundamentals | Subqueries | TODO | 30 min |
| 18 | PHP-MySQL Integration | PDO connection and prepared statements | TODO | 30 min |
| 19 | PHP-MySQL Integration | Inserting data via PHP forms | TODO | 30 min |
| 20 | PHP-MySQL Integration | Retrieving data and display | TODO | 30 min |
| 21 | PHP-MySQL Integration | Updating records | TODO | 30 min |
| 22 | PHP-MySQL Integration | Deleting records | TODO | 30 min |
| 23 | CRUD Capstone | Product inventory model | TODO | 30 min |
| 24 | CRUD Capstone | Basic CRUD UI | TODO | 30 min |
| 25 | CRUD Capstone | Validation & security basics | TODO | 30 min |
| 26 | CRUD Capstone | Final polish & presentation | TODO | 30 min |

> Phase breakdown for reference
- Phase 1: PHP Basics (Labs 01-10) — TODO format; students implement PHP code
- Phase 2: MySQL Fundamentals (Labs 11-17) — SQL exercises in phpMyAdmin
- Phase 3: PHP-MySQL Integration (Labs 18-22) — TODO format, PHP + MySQL integration
- Phase 4: CRUD Capstone (Labs 23-26) — Full solution labs; Product Inventory app

## 5. Student Instructions
- Open each lab's index.php in a browser
- Read explain.php for theory and examples
- Complete TODO exercises in index.php
- Run the page to see results
- Try the Exploration Challenges at the end
- For MySQL labs: copy SQL to phpMyAdmin

## 6. Lecturer Instructions
- Use explain.php as teaching reference during class
- Live code the TODO solutions during class
- Students follow along on their own machines
- Assign Exploration Challenges as homework
- CRUD capstone (Labs 23-26) is the final assessment

## 7. Suggested Schedule (10 weeks)
- Week 1-2: Labs 01-05 (PHP Basics Part 1)
- Week 3-4: Labs 06-10 (PHP Basics Part 2)
- Week 5-6: Labs 11-17 (MySQL Fundamentals)
- Week 7-8: Labs 18-22 (PHP-MySQL Integration)
- Week 9-10: Labs 23-26 (CRUD Capstone)

## 8. Grading Rubric
- 40% Lab exercises (TODOs completed correctly)
- 20% Code quality (clean, readable, commented)
- 20% Exploration challenges
- 20% CRUD capstone project

## 9. File Structure
``
php-mysql-lab/
├── index.php          # Landing page / dashboard
├── style.css          # Shared CSS design system
├── config.php         # Database connection config
├── setup.sql          # Database setup script
├── README.md          # This file
├── includes/
│   ├── header.php     # Shared HTML head + sidebar nav
│   └── footer.php     # Shared footer
└── labs/
    ├── 01-php-introduction/
    │   ├── index.php  # Exercise page
    │   └── explain.php # Theory/examples page
    ├── ... (26 labs total)
    └── 26-crud-final-polish/
        ├── index.php
        └── explain.php
```

## 10. Common Issues & Tips
- "Connection failed" error → Check MySQL is running in XAMPP
- PHP code shows in browser → Ensure file extension is .php
- setup.sql error → Make sure MySQL service is started
- Blank page → Check PHP error display settings in php.ini

## 5. MUST NOT DO
- Do not include AI-generated filler text; be concise and practical
- Do not include installation instructions for VS Code (out of scope)
- Do not add a grading scale beyond the rubric above

## 6. CONTEXT (Context references for planning)
- Notepad Paths: READ `.sisyphus/notepads/php-mysql-lab/learnings.md` | WRITE to this file to append learnings
- Inherited Wisdom: Reference: uts-prep/README.md had similar structure (lab table, rubric, schedule, instructions)
- This is a teaching tool, not production software
- Dependencies: None (readme is standalone documentation)

---
COPYRIGHT: Binus University – PHP & MySQL Learning Lab
