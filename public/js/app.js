
function calculateExchangeRate(exchangeRate)
{
    let userInput = document.getElementById("value").value;
    let result = exchangeRate * userInput;

    let purchase = document.getElementById("purchase");

    let resultShow = document.getElementById("result");
    if (result) {
        resultShow.style.display = "block";
        purchase.style.display = "block";
        document.getElementById('result').innerHTML = result;
    } else {
        resultShow.style.display = "none";
    }
}




