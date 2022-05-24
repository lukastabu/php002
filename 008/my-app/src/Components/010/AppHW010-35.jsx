import { useEffect, useState } from "react";
import "./App.css";


function App() {  

  const [pradinis, setPradinis] = useState('0');
  const [kv, setKv] = useState([]);

  const plus = () => {setPradinis(p => p = (p + 1))};
  const minus = () => {setPradinis(p => p = (p - 1))};
  const addredKv = () => setKv(kvM => [...kvM, 'red']);
  const addblueKv = () => setKv(kvM => [...kvM, 'blue']);
  const resetKv = () => setKv(kvM => []);

  return (
    <div className="App">
    <header className="App-header">

  return (
    <div className="App">
    <header className="App-header">
    <h1>{pradinis}</h1>
    <button onClick={minus}>MINUS 1</button>
    <button onClick={plus}>PLUS 1</button>
    <hr/>
    <div className="kvc">
      <div>{
        kv.map ((k, i) => <div key={i} className="kv" style={{background: k}}>{i}</div>)
      }</div>
      </div>
    <button onClick={addredKv}>ADD RED</button>
    <button onClick={addblueKv}>ADD BLUE</button>
    <button onClick={resetKv}>RESET</button>

    </header>
    </div>
  );

    </header>
    </div>
  );
}

export default App;
