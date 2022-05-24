import { seaPlaners } from "../../App";

function Tipas() {
    return (
        seaPlaners.sort((a, b) => a.type.localeCompare(b.type)).map((s, i) =>(
        <div>
        type: <i>{s.type}</i> <b>{s.name}</b>
        </div>
        )))
}

export default Tipas;