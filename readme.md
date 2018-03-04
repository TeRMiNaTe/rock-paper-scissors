# Rock–paper–scissors built on Laravel 5.2

This is an showcase of an OOP Rock–paper–scissors game. The game files can be found in the `App\Game` directory. Unit tests are included in the `tests` directory

## Techniques Used

Class Inheritance, Visibility, Traits, Abstraction, Constructors and others

## Game Mechanics

- There are 2 players
- Each player draws a random hand each round
- If a winner is found the player with the winning hand gets a point
- In case of a draw, restart the round
- After 3 (variable) rounds a winner is declared

## Custom Hand Types

All hand types are located in the `Hands` folder within the main `Game` directory.  
To add a new hand:

- Create a new class within the `Hands` directory
- Implement the abstract Hand class
- Add the new class name to the `beats` property of the hand that beats it. For example if you add 'Boulder' in the place of 'Rock', you need to add 'Boulder' to the `$beats` array in the Paper Hand class.
- Change the `$hands` property of the game model to use your newly-created class

## Credits

Created by Vladislav Dimitrov.
