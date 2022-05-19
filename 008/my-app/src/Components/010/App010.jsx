import { useState } from "react";
import "./App.css";
import randColor from "../../Functions/randColor";

function App() {  
  const stebuklas = (a) => {
    console.log("stebuklu stebuklas" + a);
  };

  const kitasstebuklas = () => {
    console.log("stebuklu stebuklas");
  };

  const [spalva, setSpalva] = useState("aquamarine");
  const colorChange = () => {
    // const nextColor = spalva === 'aquamarine' ? 'green' : 'aquamarine'; geriau rasyti metodu eilute zemiau
    setSpalva(oldColor => oldColor === 'aquamarine' ? 'pink' : 'aquamarine');
  }

  const [skaicius, setSkaicius] = useState (1);
  const addition = () => {
    setSkaicius (skaicius => skaicius +1);
  }

  const kates = ['Pilkis', 'Murkis', 'Rainius'];

  const [kv, setKv] = useState([]);

  const addKv = () => setKv(kvM => [...kvM, randColor()]);
  const REMkv = () => setKv(kvM => [kvM.slice(-1, 1)]);

  return (
    <div className="App">
      <header className="App-header">
      <h1 style={{ color: spalva }}>State {skaicius}</h1>
      <span>{
        kates.map ((valueKate, i) => <div key={i}>{valueKate}</div>)
      }</span>


      <div className="kvc">
      <div>{
        kv.map ((k, i) => <div key={i} className="kv" style={{background: k}}>{i}</div>)
      }</div>
      </div>

      <button onClick={() => stebuklas("boom boom")}>Press with argument</button>
      <button onClick={kitasstebuklas}>Press without argument</button>
      <button onClick={colorChange}>Change color</button>
      <button onClick={addition}>+1</button>
      <button onClick={addKv}>ADD KVADRAT</button>
      <button onClick={REMkv}>REM KVADRAT</button>
      </header>
    </div>
  );
}


export default App;
