# Quera Problem Solution: Round Table

This repository contains a solution to the "Round Table" problem from Quera. The problem statement can be found [here](https://quera.org/problemset/280062).

## Problem Description

In the "Round Table" problem, we are given a round table with `n` seats, each occupied by a person. Each person has a unique identifier ranging from `1` to `n`. The task is to determine the minimum number of people that need to be removed so that no two adjacent seats are occupied.

## Solution Approach

The solution involves the following steps:

1. **Input Reading**: Read the number of seats `n` and the list of occupied seats.
2. **Edge Case Handling**: If `n` is less than or equal to 2, the solution is straightforward since no two adjacent seats can be occupied.
3. **Dynamic Programming**: Utilize a dynamic programming approach to determine the minimum number of removals required:
   - Define a state that represents the minimum removals needed up to a certain seat.
   - Iterate through the seats, updating the state based on whether the current seat and the previous one are both occupied.
4. **Circular Table Consideration**: Since the table is round, ensure that the first and last seats are also checked for adjacency.
5. **Output the Result**: Print the minimum number of removals required.

## Files in the Repository

- `solution.php`: Contains the PHP implementation of the solution.
- `roundTableSampleTest.php`: Provides sample test cases to validate the solution.
- `composer.json` and `composer.lock`: Manage dependencies for the project.

## How to Run the Solution

### 1. Clone the Repository
```bash
git clone https://github.com/mmddev87/Quera-IranServer-Q2.git
```

### 2. Navigate to the Directory
```bash
cd Quera-IranServer-Q2
```

### 3. Install Dependencies
Ensure you have [Composer](https://getcomposer.org/) installed, then run:
```bash
composer install
```

### 4. Run the Solution
Execute the PHP script:
```bash
php solution.php
```

### 5. Run Tests with PHPUnit
#### Windows
```powershell
vendor\bin\phpunit.bat roundTableSampleTest.php
```

#### macOS & Linux
```bash
vendor/bin/phpunit roundTableSampleTest.php
```

## Dependencies

- PHP 7.4 or higher
- Composer for dependency management
- PHPUnit for running tests

## Author

This solution is implemented and maintained by [mmddev87](https://github.com/mmddev87).