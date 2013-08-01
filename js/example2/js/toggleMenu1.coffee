#Coffeescript code for Toggle 1 Menu

hideMenu=(elementname,classname)->
    allElements=document.getElementsByTagName(elementname)
    for currentElement in allElements
        if currentElement.className is classname then currentElement.style.display='none'


oldMenu=null
toggleMenu=(currId)->
    currMenu=document.getElementById(currId)
    if oldMenu then oldMenu.style.display='none'
    currMenu.style.display='block'
    oldMenu=currMenu
    return