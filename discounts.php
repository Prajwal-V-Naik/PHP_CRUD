<!-- you work for a shop that wishes to give a discount of discount% to the most expensive item purchased by a given customer during sales period. Only one product can benefit from the discount You are tasked by the shop owner to implement the function calculateTotalPrice($price,$discount) which takes the list of prices of the products purchased by a customer and the percentage $discount as parameters and return the total purchase price as an integer(rounded down if the total is float  number)                                                                                             Constraints: 
    1) 0<= $discount <=100 
    2)0<price of a product < 100000 
    3) 0 < number of product < 100
 -->

 function calculateTotalPrice($prices, $discount) {
    if (count($prices) === 0) {
        // If there are no products, return 0
        return 0;
    }

    // Find the index of the highest-priced product
    $maxIndex = array_search(max($prices), $prices);

    // Apply the discount to the highest-priced product
    $discountAmount = $prices[$maxIndex] * ($discount / 100);
    $prices[$maxIndex] -= $discountAmount;

    // Compute the total purchase price
    $totalPrice = array_sum($prices);

    // Round down to the nearest integer
    return floor($totalPrice);
}
