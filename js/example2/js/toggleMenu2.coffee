#Coffeescript code for Toggle 2 Menu

hideMenu=(elementname,classname)->
    allElements=document.getElementsByTagName(elementname)
    for currentElement in allElements
        if currentElement.className is classname then currentElement.style.display='none'



toggleMenu=(currId)->
    currMenu=document.getElementById(currId)
    if currMenu.style.display is'block'then currMenu.style.display='none'else currMenu.style.display='block'
    return