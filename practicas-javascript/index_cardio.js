// CHALLENGE 1: REVERSE A STRING
// Return a string in reverse
// ex. reverseString('hello') === 'olleh'

function reverseString(str) {
   let reverse_word = "";
   for (var i = str.length-1; i >= 0; i--) {
   		reverse_word+=str.charAt(i);
   }
   return reverse_word;
}



// CHALLENGE 2: VALIDATE A PALINDROME
// Return true if palindrome and false if not
// ex. isPalindrome('racecar') === 'true', isPalindrome('hello') == false

function isPalindrome(str) {
	let word = str;
	let reverse_word = "";
	for(i=word.length;i>=0;i--){
		reverse_word += word.charAt(i);
	}
	if (word === reverse_word) {
		return true;
	}else{
		return false;
	}
}



// CHALLENGE 3: REVERSE AN INTEGER
// Return an integer in reverse
// ex. reverseInt(521) === 125

function reverseInt(int) {
	let num = int.toString();
	let reverse_num = '';
	for (var i = num.length-1; i >= 0; i--) {
		reverse_num += num.charAt(i);
	}
	return parseInt(reverse_num);
	
}



// CHALLENGE 4: CAPITALIZE LETTERS
// Return a string with the first letter of every word capitalized
// ex. capitalizeLetters('i love javascript') === 'I Love Javascript'
function capitalizeLetters(str) {
	let word = str.trim();
	let capitalized = word.charAt(0).toUpperCase()+word.slice(1);
	return capitalized;
}



// CHALLENGE 5: MAX CHARACTER
// Return the character that is most common in a string
// ex. maxCharacter('javascript') == 'a'
function maxCharacter(str) {
	let word = str.match(/s/);
	let character = '';
	let contador = 0;
	let commonCharacter='';
	for (var i = 0; i <= str.length; i++) {
		character = str.charAt(i)
		let contadorTemp = 0;
		for (var j = 0; j <= str.length; j++) {
			if (character==str.charAt(j)) {
				contadorTemp++;
				if (contadorTemp>contador) {
					commonCharacter = str.charAt(i);
					contador=contadorTemp;
				}
			}
		}
	}
	return commonCharacter;
}



// CHALLENGE 6: FIZZBUZZ
// Write a program that prints all the numbers from 1 to 100. For multiples of 3, instead of the number, print "Fizz", for multiples of 5 print "Buzz". For numbers which are multiples of both 3 and 5, print "FizzBuzz".
function fizzBuzz() {}



// Call Function
//const output = reverseString('hello');
//const output = isPalindrome('racecar');
//const output = capitalizeLetters('  i love javascript  ');
//const output = reverseInt(521);
const output = maxCharacter('javascript');

console.log(output);