const accts = [
  "Not Working yet!, please return later 😉",
  "Not Working yet!, please return later 🙃"
];
function getRandomItem (list) {
	const randomIndex = Math.floor(Math.random() * list.length)
	return list[randomIndex]
}

function getRandomAccts () {
  return `${getRandomItem(accts)}`}

function putPhraseOnThePage () {
  const h3 = document.querySelector('#acct')
  h3.innerText = getRandomAccts()
}