<!-- 	
Objective:-
    In this problem, you'll be given a list of positive integers and a separate integer, k and tasked with finding whether there is a pair of integers in the list that sum to exactly k

Implementation:-
    Implement the function findSumPair($numbers, $k) which takes input.
    an array of positive integers ($numbers)
    a positive integer ($k), representing the target sum

For example:-
$numbers = [1, 5, 8, 1, 21
$k = 13

Your FindSumPair function should return an array of two integers, containing the Indices of a pair of integers in the array that sum to k Note that

The first index of the array is o

The first integer in your output should represent the lower index
[0, 0] should be returned if there no pair is found In the case that there are multiple possible pairs that tum to the target, return the pair whose left index is the lowest 
In the case of two pairs having the same left index, favor the par with the lower right index.
For the above example, the correct output would be [1, 2] -->

function findSumPair($numbers, $k) {
  $n = count($numbers);
  for ($i = 0; $i < $n; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
      if ($numbers[$i] + $numbers[$j] == $k) {
        return array($i, $j);
      }
    }
  }
  return array(0, 0);
}
