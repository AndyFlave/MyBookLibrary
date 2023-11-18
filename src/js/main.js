document.addEventListener('DOMContentLoaded', () => {

	const wantBooks = document.querySelectorAll('.aside-list__item')
  const myStorage = window.localStorage

  !JSON.parse(myStorage.getItem('books')).length && myStorage.setItem('books', '[]')

	const openPanelStatus = event => {
    let tempObject = JSON.parse(myStorage.getItem('books'))

    if (!tempObject.includes(event.target.innerHTML)) {
      tempObject.push(event.target.innerHTML)
      myStorage.setItem('books', JSON.stringify(tempObject))
    }
	}

	for (el of wantBooks) {
		el.addEventListener('click', openPanelStatus)
	}
})