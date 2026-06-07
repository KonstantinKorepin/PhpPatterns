<?php

namespace App\Patterns\Structure\SessionFacade;

/**
 * Класс Фасада предоставляет простой интерфейс для сложной
 * логики одной или нескольких подсистем так или иначе
 * работающие с сессионными объектами. Фасад делегирует
 * запрос к объектам внутренней подсистемы. Фасад также
 * отвечает за управление их жизненным циклом. Все это
 * защищает клиента от нежелательной сложности подсистемы.
 */
class SessionFacade
{
    protected $subsystem1;

    protected $subsystem2;

    /**
     * В завсимости от потребностей вашего приложения
     * вы можете предоставить Фасаду существующие
     * объекты подсистемы или заставить Фасад создать
     * их самостоятельно.
     * @param Subsystem1|null $subsystem1
     * @param Subsystem2|null $subsystem2
     */
    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    )
    {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    public function operation(): string
    {
        $result = 'Facade initializes subsystems:' . PHP_EOL;
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1(SessionObject::getSessionData());
        $result .= 'Facade orders subsystems to perform the action:' . PHP_EOL;
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();
        return $result;
    }
}
