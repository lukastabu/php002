import Daiktas from "./Daiktas";

function Tvenkinys ({seaPlaners}) {
    return (
    <div>
    {
        seaPlaners.map (s => s.id % 2 ? <Daiktas key={s.id} seaPlaner={s}></Daiktas> : null)
    }
    <hr/>
    {
        seaPlaners.map (s => s.id % 2 ? null : <Daiktas key={s.id} seaPlaner={s}></Daiktas>)
    }
    </div>
    )
}

export default Tvenkinys;