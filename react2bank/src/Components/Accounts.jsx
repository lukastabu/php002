function Accounts() {
    return (
        <>
{/* <main className="main saskaitos"> */}
    <h3>Sąskaitų sąrašas</h3>
    {/* <?php
    require __DIR__ . '/msg.php';
    ?> */}
    <ul>
        {/* <?php foreach ($users as $key => $user) : ?>   
            <li className="action1">
                <span>Sąskaitos Nr.: <span className="value"></span><?= $user['sasNr'] ?></span>
                <br>
                <span>Vardas: <span className="value"></span><?= $user['name'] ?></span>
                <br>
                <span>Pavarde: <span className="value"></span><?= $user['surname'] ?></span>
                <br>
                <span>Asmens id: <span className="value"></span><?= $user['personId'] ?></span>
                <br>
                <span>Turimos lėšos eurais: <span className="value"></span><?= $user['suma'] ?></span>
                <br>
                <span>Turimos lėšos ukrainais: <span className="value"></span><?= Converter::currency_convert($user['suma']) ?></span>

                <div className="action2">
                <form action="<?= $link.'delete/'.$user['client']?>" method="post">
                <button className="btn" type="submit">DELETE</button>
                </form>
                <a className="btn" href="<?= $link.'add/'.$user['client']?>">Pridėti lėšas</a>
                <a className="btn" href="<?= $link.'remove/'.$user['client']?>">Nuskaičiuoti lėšas</a>
                </div>
            </li>
        <?php endforeach ?> */}
           {
            users.map (user =>
            <li className="action1">
            <span>Sąskaitos Nr.: <span className="value"></span>{user}['sasNr']</span>
            <br>
            <span>Vardas: <span className="value"></span>{user}['name']</span>
            <br>
            <span>Pavarde: <span className="value"></span>{user}['surname']</span>
            <br>
            <span>Asmens id: <span className="value"></span>{user}['personId']</span>
            <br>
            <span>Turimos lėšos eurais: <span className="value"></span>{user}['suma']</span>
            <br>
            <span>Turimos lėšos ukrainais: <span className="value"></span><?= Converter::currency_convert($user['suma']) ?></span>

            {/* <div className="action2">
            <form action="<?= $link.'delete/'.$user['client']?>" method="post">
            <button className="btn" type="submit">DELETE</button>
            </form>
            <a className="btn" href="<?= $link.'add/'.$user['client']?>">Pridėti lėšas</a>
            <a className="btn" href="<?= $link.'remove/'.$user['client']?>">Nuskaičiuoti lėšas</a>
            </div> */}
        </li>
        )}
        </ul>
        </>
        )
}

export default Accounts;