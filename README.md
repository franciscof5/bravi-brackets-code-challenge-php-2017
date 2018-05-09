# ivarb-brackets
Ivarb Brackets Parser

Insert the brackets in the input field and submit it to itself ($_GET) to check brackets validations

## Logic

Is very simples, just count opening and closing brackets, if the number of close and opening brackets dont fit PHP throw an invalid message

Examples:
* (){}[] is valid
* [{()}](){} is valid
* []{() is not valid
* [{)] is not valid

Author: Francisco Matelli Matulovic