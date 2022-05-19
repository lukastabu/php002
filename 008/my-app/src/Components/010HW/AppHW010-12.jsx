import { useState } from "react";
import "./App.css";
import randNum from "../../Functions/randNum";

function App() {  

  const [radius, setRadius] = useState("50%");
  const set = () => {setRadius(r => radius === '0%' ? '50%' : '0%')};

  const [skaicius, setSkaicius] = useState (randNum);
  const randomise = () => {
    setSkaicius (randNum);
  }

  return (
    <div className="App">
    <header className="App-header">
    <div className="Shape" style={{borderRadius: radius}}>{skaicius}</div>
    <button onClick={set}>CHANGE</button>
    <button onClick={randomise}>RANDOM</button>
    </header>
    </div>
  );
}

export default App;
