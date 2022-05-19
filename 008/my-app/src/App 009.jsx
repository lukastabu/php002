import './App.css';
import Labas from './Components/009/Greeting';
import Kurmis from './Components/009/Kurmis';
import Zib from './Components/HW009/3';
import Zuikis from './Components/HW009/12';
import Duprop from './Components/HW009/4';
import Trysprop from './Components/HW009/5';


function App() {
  return (
    <div className="App">
      {/* <header className="App-header">
        <Labas spalva = "red" size = "60"></Labas>
        <Kurmis></Kurmis>
        <Kurmis></Kurmis>
        <Labas spalva = "green" size = "50"></Labas>
        <Labas spalva = "blue" skaicius = {13}></Labas>
      </header>
       */}
      {/* <header className="App-header">
        <Zuikis tekstas = "PUIKI"></Zuikis>
      </header> */}
      {/* <header className="App-header">
        <Zib spalva = {2}></Zib>
      </header> */}
      {/* <header className="App-header">
        <Duprop tekstas1 = "Labas!" tekstas2 = "as krabas"></Duprop>
      </header> */}
      <header className="App-header">
        <Trysprop tekstas1 = "Labas!" tekstas2 = "as krabas" spalva = "red"></Trysprop>
      </header>
    </div>
  );
}

export default App;
