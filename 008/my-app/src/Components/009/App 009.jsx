import './App.css';
import Labas from './Greeting';
import Kurmis from './Kurmis';
import Zib from '../009HW/3';
import Zuikis from '../009HW/12';
import Duprop from '../009HW/4';
import Trysprop from '../009HW/5';


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
