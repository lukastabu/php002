import { useState } from "react";
import "./App.css";
import randNum from "./Functions/randNum";

function App() {  

  const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
  const sortDogs = dogs.reverse();

  const [radius, setRadius] = useState("50%");
  const [skaicius, setSkaicius] = useState (randNum);
  
  const set = () => {setRadius(r => radius === '0%' ? '50%' : '0%')};
  const randomise = () => {setSkaicius (randNum)};

  return (
    <div className="App">
    <header className="App-header">
      <div>
        {sortDogs.map((sortDog, i) => <div key={i} className="kv-block">{(i+1)}<br></br>{sortDog}</div>)
        // kv.map ((k, i) => <div key={i} className="kv" style={{background: k}}>{i}</div>)
      }</div>

    {/* <div className="Shape" style={{borderRadius: radius}}>{skaicius}</div>
    <button onClick={set}>CHANGE</button>
    <button onClick={randomise}>RANDOM</button> */}
    </header>
    </div>
  );
}

export default App;
