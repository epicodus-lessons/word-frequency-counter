# Word Frequency Counter Project

#### _A webpage that displays the frequency of a word, 17 February 2017_

#### By _**Erica Wright**_

## Description

This webpage will allow a user to input a string and a word to search and will display how many times that word is contained within the string.

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub]https://github.com/ericaw21/word-frequency-counter.
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac), or __php -S localhost:8888__ (if using windows).
4. Open the directory http://localhost:8000/ (if on a mac) or http://localhost:8888/ (if on windows pc) in any standard web browser.

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Enter a word to search with a single word string | "cat" and "cat" | 1 |
| Enter a word to search with a single word string containing none | "cat" and "bat" | 0 |
| Enter a word to search with a multiple word string | "cat" and "the cat in the hat" | 1 |
| Enter a word to search with a multiple word string containing none | "cat" and "the bat in the hat" | 0 |
| Enter a word to search with a multiple word string with two instances | "cat" and "the cat by the cat" | 2 |
| Enter a word to search with a multiple word string with multiple instances | "cat" and "the cat by the cat with a cat" | 3 |
| Enter a word to search with a multiple word string with part of words contained | "cat" and "the cat in the cathedral" | 1 |
| Enter a word to search with a string containing non-letter characters | "cat" and "the cat, the bat, and the car by the cat" | 2 |
| Enter a word to search with a string containing upper and lower cases | "cat" and "The Cat, the Bat, and the Car by the Cat" | 2 |
| Enter a word to search with a string containing words with dashes | "cat" and "cat-bear" | 1 |
| Enter a word to search with a string containing an anagram word | "read" and "the dear boy" | 0 |

## Known Bugs

No known bugs.

## Support and contact details

Please contact ericaw21@gmail.com with questions or concerns.

## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 {**Erica Wright**} All Rights Reserved.
