import { seaPlaners } from "../../App";
function Spalva() {

    // seaPlaner.sort(localeCompare(seaPlaner.name, seaPlaner.color));
    // return <div>
    //     type: <i>{seaPlaner.color}</i> <b>{seaPlaner.name}</b>
    // </div>;
    return (
        seaPlaners.sort((a, b) => a.color.localeCompare(b.color)).map((s, i) =>(
        <div>
        color: <i>{s.color}</i> <b>{s.name}</b>
        </div>
        )))
}

export default Spalva;