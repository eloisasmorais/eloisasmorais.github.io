let input, ul;

ul = document.getElementById("list");
input = document.getElementById("userInput");

function addToList () {
    let li;

    if (input.value.length) {
        li = document.createElement("li");
        li.appendChild(document.createTextNode(input.value));
        ul.appendChild(li);
        input.value = "";
    }
}

document.querySelector('.btn').addEventListener('click', addToList);