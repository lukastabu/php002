function Kurmis() {
    const xbbb = 20;
    return (
        <>
        <h2 style={
            {
                color:"pink",
                fontStyle: 'italic',
                padding: '10px',
                fontSize: xbbb + 'px'
            }
        }>Kurmiux</h2>
        <span> { 10 + 2 + xbbb } Kurmiai yra visai skanu</span>
        <span> { xbbb > 30 ? 'aciu buvo skanu' : 'norim dar!' }</span>
        </>
    )
}

export default Kurmis;