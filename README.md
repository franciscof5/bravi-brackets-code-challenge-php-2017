# ivarb-brackets
Ivarb Brackets Parser

Insert the brackets in the input field and submit it to itself ($_GET) to check brackets validations

## Logic

Is very simples, just count opening and closing brackets, if the number of close and opening brackets dont fit PHP throw an invalid message. It has an special case scenario, not contempled by examples below, it must check position for first ocurrencies of opening brackets (dont need to be recursive), they must come first than closet bracket.

Examples:
* (){}[] is valid
* [{()}](){} is valid
* []{() is not valid
* [{)] is not valid

Author: Francisco Matelli Matulovic