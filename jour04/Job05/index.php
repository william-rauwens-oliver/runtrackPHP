<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Morpion</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  #container {
    text-align: center;
  }
  h1 {
    color: #333;
    margin-bottom: 20px;
  }
  table {
    border-collapse: collapse;
    margin: 0 auto;
  }
  td, th {
    border: 1px solid #999;
    width: 50px;
    height: 50px;
    text-align: center;
    font-size: 24px;
  }
  button {
    width: 100%;
    height: 100%;
    font-size: 24px;
    background-color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  button:hover {
    background-color: #eee;
  }
  #resetBtn {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s;
  }
  #resetBtn:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>

<div id="container">
  <h1>Jeu du Morpion</h1>
  <table id="morpion">
    <tr>
      <td><button onclick="placeSymbol(0, 0)">-</button></td>
      <td><button onclick="placeSymbol(0, 1)">-</button></td>
      <td><button onclick="placeSymbol(0, 2)">-</button></td>
    </tr>
    <tr>
      <td><button onclick="placeSymbol(1, 0)">-</button></td>
      <td><button onclick="placeSymbol(1, 1)">-</button></td>
      <td><button onclick="placeSymbol(1, 2)">-</button></td>
    </tr>
    <tr>
      <td><button onclick="placeSymbol(2, 0)">-</button></td>
      <td><button onclick="placeSymbol(2, 1)">-</button></td>
      <td><button onclick="placeSymbol(2, 2)">-</button></td>
    </tr>
  </table>

  <button id="resetBtn" onclick="resetGame()">Réinitialiser la partie</button>
</div>

<script>
let currentPlayer = 'X';
let board = [
  ['', '', ''],
  ['', '', ''],
  ['', '', '']
];

function placeSymbol(row, col) {
  if (board[row][col] === '') {
    board[row][col] = currentPlayer;
    document.getElementById('morpion').rows[row].cells[col].innerHTML = currentPlayer;
    
    if (checkWin(currentPlayer)) {
      alert(currentPlayer + ' a gagné');
      resetGame();
    } else if (checkDraw()) {
      alert('Match nul');
      resetGame();
    } else {
      currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
    }
  }
}

function checkWin(player) {
  for (let i = 0; i < 3; i++) {
    if ((board[i][0] === player && board[i][1] === player && board[i][2] === player) ||
        (board[0][i] === player && board[1][i] === player && board[2][i] === player)) {
      return true;
    }
  }
  if ((board[0][0] === player && board[1][1] === player && board[2][2] === player) ||
      (board[0][2] === player && board[1][1] === player && board[2][0] === player)) {
    return true;
  }
  return false;
}

function checkDraw() {
  for (let row of board) {
    for (let cell of row) {
      if (cell === '') {
        return false;
      }
    }
  }
  return true;
}

function resetGame() {
  currentPlayer = 'X';
  board = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
  ];
  let buttons = document.querySelectorAll('button');
  buttons.forEach(button => button.innerHTML = '-');
}
</script>

</body>
</html>
