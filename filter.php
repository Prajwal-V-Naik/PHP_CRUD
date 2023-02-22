<!-- 
Objective:-
In this problem, you'll be filtering words based on the letters that they contain Specifically, you'll be given an input list of words (all lowercase), along with a set of lowercase letters, and asked to filter our the words that don't contain any letters in the given set

Implementation:-
Implement the function filterWords ($words, $letters) which takes as input:
an array of strings ($words) with the words to filter 
A string ($letters), used to filter the words

For example:-

$words = ['the', 'dog' 'got' ,’a’,’bone’]
$letters= ‘ae’
Your filterWords function should return an array of strings from $words that contain at least one letter in $letters. The returned list should maintain the same ordering as in $words
For the above example, the correct output would be:
['the', 'a', 'bone'] -->

function filterWords($words, $letters) {
    // Convert the letters string to an array of characters
    $letterArr = str_split($letters);

    // Initialize an empty array to hold the filtered words
    $filteredWords = array();

    // Iterate over each word in the input array
    foreach ($words as $word) {
        // Iterate over each letter in the word
        foreach (str_split($word) as $char) {
            // Check if the current letter is in the list of letters
            if (in_array($char, $letterArr)) {
                // Add the word to the list of filtered words and move on to the next word
                $filteredWords[] = $word;
                break;
            }
        }
    }

    return $filteredWords;
}
