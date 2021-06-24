const cells = Array.from(document.querySelectorAll("td"))
const lines = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6]
]
const moveIndicator = document.querySelector("p span")
let onMove = "×",
  gameOver = false

const getText = indexArray => indexArray.reduce((str, i) => str + cells[i].textContent, "")

const checkWin = () => {
  const winningLine = lines.find(line => ["×××", "○○○"].includes(getText(line)))
  if (!winningLine)
    return false
  winningLine.forEach(index => cells[index].style.background = "#66ff66")
  gameOver = true
  return true
}

const checkDraw = () => {
  if (cells.some(cell => !cell.textContent))
    return false
  cells.forEach(cell => cell.style.background = "lightgray")
  gameOver = true
  return true
}

const markCell = e => {
  if (gameOver || e.target.textContent)
    return

  e.target.textContent = onMove

  if (checkWin())
    return

  if (checkDraw())
    return

  onMove = (onMove === "×") ? "○" : "×"
  moveIndicator.textContent = onMove
}

const startNewGame = () => {
  gameOver = false
  onMove = "×"
  moveIndicator.textContent = "×"
  cells.forEach(cell => {
    cell.textContent = ""
    cell.style.background = ""
  })
}

