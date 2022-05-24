import Laivas from "./Laivas";
import Sala from "./Sala";
import Valtis from "./Valtis";


function Jura ({seaPlaners}) {
    return (
    <div>
    {
        seaPlaners.map (s => s.type === 'man' ? <Valtis key={s.type} seaPlaner={s}></Valtis> : null)
    }
    {
        seaPlaners.map (s => s.type === 'car' ? <Laivas key={s.type} seaPlaner={s}></Laivas> : null)
    }
    {
        seaPlaners.map (s => s.type === 'animal' ? <Sala key={s.type} seaPlaner={s}></Sala> : null)
    }
    {
        seaPlaners.map (s => s.type === 'fish' ? <div key={s.type} seaPlaner={s}><i>{s.type}</i> <b>{s.name}</b></div> : null)
    }

    </div>
    )
}

export default Jura;