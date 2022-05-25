// import { useEffect, useState } from "react";
// import { useEffect, useRef, useState } from "react";
import { useState } from "react";
import "./App.css";

const cats = ["Rainius", "Pilkis", "Murkis", "Egidijus"];

const dogs = ["Reksas", "Amsis", "Bobikas", "Vytautas"];

function App() {
  const [kates, setKates] = useState([]);
  const [sunys, setSunys] = useState([]);

  const rodyti = () => {
    setKates(x => [...x, ...cats]);
  };

  const rodytisunis = () => {
    setKates(dogs);
  };
  const clearing = () => {
    setKates([]);
  }

  return (
    <div className="App">
      <header className="App-header">
      <div>
          {kates.map((kate, i) => (
            <div key={i}>{kate}</div>
          ))}{" "}
        </div>
        <div>
          {sunys.map((suo, i) => (
            <div key={i}>{suo}</div>
          ))}{" "}
        </div>
        <button onClick={rodyti}>PARODYK KATES</button>
        <button onClick={rodytisunis}>PARODYK SUNIS</button>
        <button onClick={clearing}>ISVALYTI</button>
      </header>
    </div>
  );
}

export default App;
