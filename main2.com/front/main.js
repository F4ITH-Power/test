//Ver 1.0.4(01.18.2022)
/*Скрипт выводящий кнопку отправки если все поля заполнены.
Проверка на заполненность полей производится если пользователь нажимает или отпускает клавишу */
let checkTargets = document.querySelectorAll("input.checked"),  // Переменная которая хранит список всех форм которые нужно проверить

checkValues = function (elems) // Функция в которую передаются элементы для проверки есть ли в них что то
{
    let i;
    let values = [], // Переменная для хранения инпутов
        futureReturn = null;

    if (typeof elems == "object")   // Если передался в elems обьект
    {
        for (i = 0; i < elems.length; i++)
        {
            values.push(elems[i].value);
        }
    } 
    else if (elems == null)   // Если обьект пустой то функция останавливается
    {
        return false;   // Остановка функции
    }
    else
    {
        values.push(elems.value);   // Заполнение массива
    }

    if (values.length !== 0)    // Если массив с values не пуст то
    {
        for (let i = 0; i < values.length; i++)
        {
            if (values[i] === "")   // Если пустая строка то
            {
                return false;   // Остановка функции
            }
            else
            {
                futureReturn = true;
            }
        }
    }

    console.log(elems);
    return futureReturn;
},

buttonTarget = document.querySelector(".check-button"), // Селектор на класс кнопки отправки

checkFunction = function (target)   // Функция действий
{
    if (checkValues(target))
    {
        addClass(buttonTarget, "available");    // Применение стиля available
        buttonTarget.disabled = "false";
        buttonTarget.disabled = false;  // Включение кнопки
    } 
    else
    {
        removeClass(buttonTarget, "available"); // Отмена применения стиля available
        buttonTarget.disabled = "disabled"; // Отключение кнопки
    }
};

function init() // Функция исполнения по нажатию клавиши
{
    for(let i = 0; i < checkTargets.length; i++)    // Цикл работающий по длине массива(кол-ва инпутов)
    {
        checkTargets[i].addEventListener("keydown", function()  // Функция будет происходить при нажатии кнопки
        {
            checkFunction(checkTargets);
        });
        checkTargets[i].addEventListener("keyup", function()    // Функция будет происходить при отпускании кнопки
        {
            checkFunction(checkTargets);
        })
    }
}

init();

// 2 функции со stackoverflow на создание классов
function removeClass(el, _class)
{
    if (el && el.className && el.className.indexOf(_class) >= 0)
    {
        let pattern = new RegExp('\\s*' + _class + '\\s*');
        el.className = el.className.replace(pattern, ' ');
    }
}

function addClass(el, _class)
{
    if (el.classList)
    {
        el.classList.add(_class);
    } 
    else
    {
        el.className += ' ' + _class;
    }
}
