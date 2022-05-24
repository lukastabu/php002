import Spalva from "./Spalva";
import Tipas from "./Tipas";
import Vardas from "./Vardas";


function Vandenynas ({seaPlaners}) {
    return (
    <div>
    {/* {
        seaPlaners.map (s => s.type === 'man' ? <Spalva key={s.type} seaPlaner={s}></Spalva> : null)
    }
    {
        seaPlaners.map (s => s.type === 'car' ? <Vardas key={s.type} seaPlaner={s}></Vardas> : null)
    }
    {
        seaPlaners.map (s => s.type === 'animal' ? <Tipas key={s.type} seaPlaner={s}></Tipas> : null)
    } */}
    <Spalva></Spalva>
    <Vardas></Vardas>
    <Tipas></Tipas>
    </div>
    )
}

export default Vandenynas;