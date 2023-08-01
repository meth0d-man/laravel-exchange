
function calculateExchangeRate(exchangeRate)
{
    let userInput = document.getElementById("amount").value;
    let result = exchangeRate * userInput;

    let purchase = document.getElementById("purchase");

    let resultShow = document.getElementById("result");
    // let resultInput = document.getElementById("resultInput");
    if (result) {
        resultShow.style.display = "block";
        purchase.style.display = "block";
        document.getElementById('result').innerHTML = result;
        document.getElementById("resultInput").setAttribute('value', result)
    }
}






