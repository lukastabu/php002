import { seaPlaners } from "../../App";
function Vardas() {
    return (
        seaPlaners.sort((a, b) => a.name.localeCompare(b.name)).map((s, i) =>(
        <div>
        name: <b>{s.name}</b>
        </div>
    )))
}

export default Vardas;