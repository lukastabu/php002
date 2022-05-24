import Akvariumas from "./Akvariumas";
import Garazas from "./Garazas";
import Namas from "./Namas";
import Narvas from "./Narvas";

function Pasaulis ({seaPlaners}) {
    return (
    <div>
    {
        seaPlaners.map (s => s.id % 2 && s.type === 'man' ? <Namas key={s.id} seaPlaner={s}></Namas> : null)
    }
    <hr/>
    {
        seaPlaners.map (s => !(s.id % 2) && s.type === 'man' ? <Namas key={s.id} seaPlaner={s}></Namas> : null)
    }
    <hr/><hr/>
    {
        seaPlaners.map (s => s.id % 2 && s.type === 'animal' ? <Narvas key={s.id} seaPlaner={s}></Narvas> : null)
    }
    <hr/>
    {
        seaPlaners.map (s => !(s.id % 2) && s.type === 'animal' ? <Narvas key={s.id} seaPlaner={s}></Narvas> : null)
    }
    <hr/><hr/>
    {
        seaPlaners.map (s => s.id % 2 && s.type === 'car' ? <Garazas key={s.id} seaPlaner={s}></Garazas> : null)
    }
    <hr/>
    {
        seaPlaners.map (s => !(s.id % 2) && s.type === 'car' ? <Garazas key={s.id} seaPlaner={s}></Garazas> : null)
    }
    <hr/><hr/>
    {
        seaPlaners.map (s => s.id % 2 && s.type === 'fish' ? <Akvariumas key={s.id} seaPlaner={s}></Akvariumas> : null)
    }
    <hr/>
    {
        seaPlaners.map (s => !(s.id % 2) && s.type === 'fish' ? <Akvariumas key={s.id} seaPlaner={s}></Akvariumas> : null)
    }
    </div>




    )
}

export default Pasaulis;