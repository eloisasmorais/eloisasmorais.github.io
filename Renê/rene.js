let input, ul;

ul = document.getElementById("list");
input = document.getElementById("userInput");

function addToList () {
    let li;

    li = document.createElement("li");
    li.appendChild(document.createTextNode(input.value));
    ul.appendChild(li);
}

document.querySelector('.btn').addEventListener('click', addToList);