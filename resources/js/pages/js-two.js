if (document.URL.includes("ditiseen.test/js-two")) {
    window.onload = function () {

        //__________________________________________________________Variables___//
        let addToDoButton = document.getElementById('addToDo');
        let toDoContainer = document.getElementById('toDoContainer');
        let inputField = document.getElementById('inputField');

        //__________________________________________________________Events___//
        addToDoButton.addEventListener('click', function () {
            //______________________Will_add_a_class_called_'js-two..'___//
            var paragraph = document.createElement('p');
            //______________________Sets_innerText_to_value_of_inputField___//
            paragraph.innerText = inputField.value;
            toDoContainer.appendChild(paragraph);
            //_______________________Resets_inputField_value_to_none___//
            inputField.value = "";
            //_______________________Puts_line_through_the_text_after_click___//
            paragraph.addEventListener('click', function () {
                paragraph.style.textDecoration = "line-through";
            })
            //_______________________Removes_paragraph_after_double_click___//
            paragraph.addEventListener('dblclick', function () {
                toDoContainer.removeChild(paragraph);
            })
        })
    }
}
