# PHP Tutorial Codebase (W3Schools Comprehensive Guide)

This repository contains structured, runnable PHP scripts covering all concepts from the [W3Schools PHP Tutorial](https://www.w3schools.com/php/).

---

## 📚 Curriculum & Module Structure

### 1. PHP Basics (`01-basics/`)

- **`HelloWorldAndOutput.php`**: PHP syntax, tags (`<?php ?>`), `echo`, `print`, case sensitivity of keywords vs variable names.
- **`Comments.php`**: Single-line (`//` and `#`), multi-line (`/* */`), and PHPDoc DocBlocks.
- **`VariablesAndScope.php`**: Variable rules, local scope, global scope, the `global` keyword, `$GLOBALS` superglobal array, and `static` variables.
- **`DataTypes.php`**: All 8 PHP data types (String, Integer, Float, Boolean, Array, Object, NULL, Resource) and type inspection with `var_dump()`.
- **`StringsAndFunctions.php`**: String interpolation (double quotes vs single quotes), built-in string methods (`strlen`, `str_word_count`, `strpos`, `strtoupper`, `strtolower`, `str_replace`, `strrev`, `trim`, `explode`), slicing with `substr()`, concatenation (`.` and `.=`), and escape characters.
- **`NumbersAndCasting.php`**: Numeric limits, integer and float inspection (`is_int()`, `is_float()`, `is_numeric()`), infinity (`INF`), `NaN`, and explicit type casting (`(int)`, `(float)`, `(string)`, `(bool)`, `(array)`, `(object)`).
- **`MathFunctions.php`**: `pi()`, `min()`, `max()`, `abs()`, `sqrt()`, `round()`, `ceil()`, `floor()`, and random numbers (`rand()`).
- **`ConstantsAndMagicConstants.php`**: Defining constants (`define()` vs `const`), constant arrays, global scope of constants, and magic constants (`__LINE__`, `__FILE__`, `__DIR__`, `__FUNCTION__`, `__CLASS__`, `__METHOD__`, `__TRAIT__`).
- **`Operators.php`**: Arithmetic, Assignment, Comparison (including identity `===` and spaceship `<=>`), Increment/Decrement, Logical (`&&`, `||`, `!`, `xor`), Array operators, Ternary (`?:`), and Null Coalescing (`??`).

---

### 2. Control Flow (`02-control-flow/`)

- **`IfElse.php`**: `if`, `else`, `elseif`, logical condition evaluation, and nested `if` statements.
- **`ShorthandIf.php`**: One-line shorthand `if`, Ternary operator (`?:`), Elvis operator (`?:`), and Null Coalescing chaining (`??`).
- **`SwitchStatements.php`**: `switch`, `case`, `break`, `default`, and multi-case fallthrough grouping.
- **`MatchExpression.php`**: PHP 8.0+ `match` expression, strict type matching (`===`), multiple expressions per arm, pattern matching, and comparison with `switch`.
- **`WhileLoops.php`**: `while` loops, step incrementing, `break`, and `do...while` loops with guaranteed initial execution.
- **`ForLoops.php`**: Standard `for` loops, counting up/down, step intervals, and nested `for` loops (multiplication grid).
- **`ForeachLoops.php`**: Iterating indexed arrays, key-value iteration (`$key => $val`), foreach over object properties, and modifying array elements in-place with references (`&$val`).
- **`BreakContinue.php`**: `break` and `continue` statements, and multi-level loop termination (`break 2`, `continue 2`).

---

### 3. Functions (`03-functions/`)

- **`FunctionBasics.php`**: Declaring and executing functions, case-insensitivity of function names, reusability, and return values.
- **`ParametersAndArguments.php`**: Single and multiple parameters, default argument values, pass-by-reference (`&$param`), and variadic functions (`...$args` / splat operator).
- **`StrictTypesAndReturns.php`**: `declare(strict_types=1)`, argument type hinting, return type declarations, nullable types (`?string`), and `void` returns.
- **`NamedArguments.php`**: PHP 8.0+ named arguments (`param: value`), order independence, skipping optional default parameters, and combining with positional arguments.
- **`AnonymousAndArrowFunctions.php`**: Anonymous functions (closures), binding outer scope variables with `use`, and PHP 7.4+ arrow functions (`fn($x) => ...`).
- **`VariableAndCallbackFunctions.php`**: Variable functions (`$func()`), callback handlers, `callable` type hints, and `call_user_func()`.

---

### 4. Arrays (`04-arrays/`)

- **`IndexedArrays.php`**: Creating indexed arrays, bracket indexing, counting elements with `count()`, and looping with `for` and `foreach`.
- **`AssociativeArrays.php`**: Key-value pairs, adding and updating elements, and key-value traversal.
- **`CreateAndManipulateArrays.php`**: Appending elements (`[] =`, `array_push`), removing elements (`unset()` vs `array_splice()`), `array_pop()`, `array_shift()`, and reindexing keys.
- **`SortingArrays.php`**: Ascending/descending sorting (`sort`, `rsort`), associative sorting by value/key (`asort`, `ksort`, `arsort`, `krsort`), and custom callbacks (`usort`).
- **`MultidimensionalArrays.php`**: 2D matrices, nested arrays, multi-level coordinate access (`$matrix[row][col]`), and nested loops.
- **`ArrayFunctions.php`**: Essential built-in array utilities (`array_merge`, `array_unique`, `array_keys`, `array_values`, `in_array`, `array_key_exists`, `array_search`, `array_filter`, `array_map`, `array_reduce`, `array_chunk`, `array_reverse`).

---

### 5. Superglobals (`05-superglobals/`)

- **`GlobalsSuperglobal.php`**: Understanding `$GLOBALS` and managing variables across scopes.
- **`ServerSuperglobal.php`**: Server headers, host information, script paths, request methods, and protocol headers via `$_SERVER`.
- **`RequestGetPost.php`**: Collecting URL parameters with `$_GET`, form payloads with `$_POST`, combined inspection via `$_REQUEST`, and security trade-offs.
- **`EnvSuperglobal.php`**: Environment variables, configuration management, `getenv()`, `putenv()`, and `$_ENV`.

---

### 6. Forms Handling & Validation (`06-forms/`)

- **`FormHandling.php`**: HTML forms with PHP integration, GET vs POST submission handling, and response rendering.
- **`FormValidationAndSanitization.php`**: Preventing Cross-Site Scripting (XSS) with `htmlspecialchars()`, `trim()`, `stripslashes()`, and standard sanitization workflows.
- **`FormRequiredFields.php`**: Required field validation, tracking error messages, and sticky form inputs.
- **`FormUrlAndEmailValidation.php`**: Validating email syntax with `filter_var(FILTER_VALIDATE_EMAIL)`, URL checking with `FILTER_VALIDATE_URL`, and regex validation for names.
- **`CompleteFormExample.php`**: An end-to-end self-contained registration form with validation, error states, and sanitized output.

---

### 7. Advanced PHP Features (`07-advanced-features/`)

- **`DateAndTime.php`**: Date formatting tokens (`date()`), Unix timestamps, `mktime()`, `strtotime()`, timezones, and the OOP `DateTime` class.
- **`IncludeAndRequire.php`**: Modular code organization, `include` vs `require` error levels, `include_once`, and `require_once`.
- **`FiltersAndSanitization.php`**: Validating and sanitizing inputs with `filter_var()`, IP/URL/Integer filters, filter flags, and custom `FILTER_CALLBACK` filters.
- **`JsonHandling.php`**: Serializing data to JSON with `json_encode()`, parsing JSON with `json_decode()` (object vs associative array), and JSON error diagnosis.
- **`RegularExpressions.php`**: PCRE regular expressions, `preg_match()`, `preg_match_all()`, `preg_replace()`, pattern modifiers (`/i`), metacharacters, and quantifiers.
- **`CookiesAndSessions.php`**: Setting, accessing, and deleting cookies via `setcookie()` / `$_COOKIE`, and session management via `session_start()`, `$_SESSION`, `session_unset()`, and `session_destroy()`.

---

### 8. File Handling (`08-file-handling/`)

- **`sample_dictionary.txt`**: Sample vocabulary reference file for file reading demonstrations.
- **`FileHandlingBasics.php`**: Checking file existence (`file_exists`), checking file size (`filesize`), quick output with `readfile()`, and whole-file operations with `file_get_contents()` and `file_put_contents()`.
- **`FileOpenReadWrite.php`**: Granular stream operations with `fopen()`, access modes (`r`, `w`, `a`, `x`), reading lines with `fgets()`, reading characters with `fgetc()`, testing end-of-file with `feof()`, writing with `fwrite()`, and closing handles with `fclose()`.
- **`FileUpload.php`**: Multipart form data, handling `$_FILES` superglobal, checking file size/types, error reporting, and persisting files with `move_uploaded_file()`.
- **`FileDirectoryOperations.php`**: Directory and file inspection (`pathinfo`, `basename`, `scandir`), creating directories (`mkdir`), copying (`copy`), renaming (`rename`), deleting files (`unlink`), and removing directories (`rmdir`).

---

### 9. Object-Oriented Programming (OOP) Basics (`09-oop-basics/`)

- **`ClassesAndObjects.php`**: Classes as blueprints, objects as instances, properties, methods, the `$this` pseudo-variable, and `instanceof`.
- **`ConstructorAndDestructor.php`**: Object initialization with `__construct()`, teardown with `__destruct()`, lifecycle management, and PHP 8.0+ Constructor Property Promotion.
- **`AccessModifiers.php`**: Property and method visibility (`public`, `protected`, `private`) and encapsulation with getters and setters.
- **`ClassConstants.php`**: Declaring class constants with `const`, visibility modifiers on constants, and accessing them via `self::` and `ClassName::`.
- **`Inheritance.php`**: Inheriting parent functionality with `extends`, accessing parent methods with `parent::`, method overriding, and preventing extension with `final`.

---

### 10. OOP Advanced Concepts (`10-oop-advanced/`)

- **`AbstractClasses.php`**: Abstract base classes, abstract method contracts, and concrete subclass implementations.
- **`Interfaces.php`**: Declaring interfaces with `interface`, multiple interface implementation with `implements`, and interface polymorphism.
- **`Traits.php`**: Horizontal code reuse with `trait` and `use`, multiple traits, and resolving method name collisions with `insteadof` and `as`.
- **`StaticMethodsAndProperties.php`**: Static class members, calling methods without instantiation, and Late Static Binding (`static::` vs `self::`).
- **`Namespaces.php`**: Organizing code with `namespace`, preventing collisions, importing with `use`, and creating aliases with `as`.
- **`Iterables.php`**: The `iterable` pseudo-type, using generators with `yield`, and custom collections implementing the `Iterator` interface.

---

### 11. Exceptions Handling (`11-exceptions/`)

- **`TryCatchFinally.php`**: Robust error handling with `try`, `catch`, and `finally` blocks, and extracting exception details (`getMessage()`, `getCode()`, `getFile()`, `getLine()`).
- **`ThrowingExceptions.php`**: Explicitly throwing exceptions with `throw new Exception()`, input guard clauses, and re-throwing exceptions.
- **`CustomExceptions.php`**: Creating user-defined exception hierarchies by extending `Exception`, and handling multiple specific `catch` blocks.

---

### 12. MySQL Database Interaction (`12-database-mysql/`)

- **`MySQLConnect.php`**: Connecting to MySQL using MySQLi Object-Oriented, MySQLi Procedural, and PDO (PHP Data Objects).
- **`CreateDatabaseAndTable.php`**: Executing DDL statements (`CREATE DATABASE`, `CREATE TABLE`) with primary keys, auto-increment, and timestamps.
- **`InsertAndLastId.php`**: Inserting single records, retrieving auto-generated primary keys (`insert_id` and `lastInsertId()`), and batch transactions with `beginTransaction()` / `commit()`.
- **`PreparedStatements.php`**: Preventing SQL Injection vulnerabilities! Parameter binding in MySQLi (`bind_param`) and PDO named placeholders (`:param`).
- **`SelectAndWhere.php`**: Querying tables with `SELECT`, filtering rows with `WHERE`, and reading records with `fetch_assoc()` and `fetchAll(PDO::FETCH_ASSOC)`.
- **`OrderByAndLimit.php`**: Sorting query results with `ORDER BY ASC/DESC`, limiting records with `LIMIT`, and implementing pagination with `OFFSET`.
- **`UpdateAndDelete.php`**: Modifying records with `UPDATE ... SET`, deleting records with `DELETE FROM`, and verifying affected row counts.

---

### 13. XML Parsing & AJAX (`13-xml-and-ajax/`)

- **`SimpleXmlParser.php`**: Loading XML from strings and files with `simplexml_load_string()`, element traversal, and attribute extraction.
- **`XmlExpatParser.php`**: High-performance, memory-efficient event-driven XML stream parsing using `xml_parser_create()` and element/data handlers.
- **`XmlDomParser.php`**: Tree-based XML parsing with `DOMDocument`, node retrieval with `getElementsByTagName()`, and document manipulation.
- **`AjaxPhpIntegration.php`**: Asynchronous backend endpoints, processing live search queries, and returning JSON data to modern frontend applications.

---

## 🚀 How to Run the PHP Code

### 1. Running Individual Scripts via PHP CLI

Open PowerShell or your terminal in the tutorial repository and run any file directly:

```powershell
# Run a basic script
php 01-basics/HelloWorldAndOutput.php

# Run an OOP script
php 09-oop-basics/ClassesAndObjects.php

# Run an Advanced Features script
php 07-advanced-features/DateAndTime.php
```

### 2. Running Forms and Web Scripts (Built-in Web Server)

PHP includes a built-in development web server for previewing web pages, HTML forms, and upload endpoints:

```powershell
# Navigate to the tutorial root directory
cd C:\Users\ebike\PHP\Tutorial

# Start the built-in server on localhost:8000
php -S localhost:8000
```

Once started, open your web browser and visit:

- Complete Registration Form: `http://localhost:8000/06-forms/CompleteFormExample.php`
- File Upload Demo: `http://localhost:8000/08-file-handling/FileUpload.php`
- AJAX Live Search: `http://localhost:8000/13-xml-and-ajax/AjaxPhpIntegration.php?q=a`
