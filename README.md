<p align="center"><img src="/public/img/i.webp" width="400" alt="Laravel Logo"></p>

# О проекте

Данный репозиторий предназначен для демонстрации концептуальных примеров паттернов проектирования 
на языке PHP. Этот репозиторий является приложением к курсу https://stepik.org/course/103628/promo и 
повторяет тот код, который автор курса предлагает во время обучения. Стоит отметить, что код 
данного репозитория не всегда отмечает современным требованиям и хорошим практикам программирования
на PHP, но всё же ради удобства обучаемых код предоставлен как это и показано в курсе.

## Исходники
- **app/Patterns** - код паттернов
- **tests/Patterns** - тесты с клиентским кодом

## Группы паттернов
- **Фундаментальные**
- **Порождающие**
- **Структурные**
- **Поведенческие**


### Фундаментальные
- [Property container / Контейнер свойств](https://stepik.org/lesson/601497/step/2) 
  - app/Patterns/Fundamental/PropertyContainer
  - tests/Patterns/Fundamental/PropertyContainerTest.php
- [Delegation / Делегирование](https://stepik.org/lesson/601498/step/2)
    - app/Patterns/Fundamental/Delegation
    - tests/Patterns/Fundamental/DelegationTest.php 
- [Event channel / Канал событий](https://stepik.org/lesson/601499/step/2)
    - app/Patterns/Fundamental/EventChannel
    - tests/Patterns/Fundamental/EventChannelTest.php
- [Interface / Интерфейс](https://stepik.org/lesson/601500/step/2) 
    - app/Patterns/Fundamental/Interface
    - tests/Patterns/Fundamental/InterfaceTest.php
- [Functional design / Функциональный дизайн](https://stepik.org/lesson/601501/step/2) 
- [Immutable interface / Неизменяемый интерфейс](https://stepik.org/lesson/601502/step/2) 
    - app/Patterns/Fundamental/ImmutableInterface
    - tests/Patterns/Fundamental/ImmutableInterfaceTest.php 
- [Immutable object / Неизменяемый объект](https://stepik.org/lesson/601503/step/2) 
    - app/Patterns/Fundamental/ImmutableObject
    - tests/Patterns/Fundamental/ImmutableObjectTest.php
- [Immutable wrapper / Неизменяемая обертка](https://stepik.org/lesson/601504/step/2) 
    - app/Patterns/Fundamental/ImmutableWrapper
    - tests/Patterns/Fundamental/ImmutableWrapperTest.php
- [Marker interface / Интерфейс-маркер](https://stepik.org/lesson/601505/step/2) 
    - app/Patterns/Fundamental/MarkerInterface
    - tests/Patterns/Fundamental/MarkerInterfaceTest.php

### Порождающие
- [Factory Method / Фабричный метод](https://stepik.org/lesson/601509/step/2) 
    - app/Patterns/Creational/FactoryMethod
    - tests/Patterns/Creational/FactoryMethodTest.php
- [Abstract Factory / Абстрактная фабрика](https://stepik.org/lesson/601510/step/2) 
    - app/Patterns/Creational/AbstractFactory
    - tests/Patterns/Creational/AbstractFactoryTest.php
- [Статический фабричный метод / Static Factory Method](https://stepik.org/lesson/601511/step/2)
    - app/Patterns/Creational/StaticFactoryMethod
    - tests/Patterns/Creational/StaticFactoryMethodTest.php
- [Статическая фабрика / Static Factory](https://stepik.org/lesson/601512/step/2) 
    - app/Patterns/Creational/StaticFactoryMethod
    - tests/Patterns/Creational/StaticFactoryMethodTest.php
- [Простая фабрика / Simple Factory](https://stepik.org/lesson/601513/step/2)
    - 1-й вариант:
      - app/Patterns/Creational/SimpleFactory
      - tests/Patterns/Creational/SimpleFactoryTest.php
    - 2-й вариант:
      - app/Patterns/Creational/SimpleFactory1
      - tests/Patterns/Creational/SimpleFactory1Test.php
- [Строитель / Builder](https://stepik.org/lesson/601514/step/2)
    - 1-й вариант:
        - app/Patterns/Creational/Builder
        - tests/Patterns/Creational/BuilderTest.php
    - 2-й вариант:
        - app/Patterns/Creational/Builder1
        - tests/Patterns/Creational/Builder1Test.php
- [Прототип / Prototype](https://stepik.org/lesson/601515/step/2)
    - app/Patterns/Creational/Prototype
    - tests/Patterns/Creational/PrototypeTest.php
- [Одиночка / Singletone](https://stepik.org/lesson/601516/step/2)
    - app/Patterns/Creational/Singleton
    - tests/Patterns/Creational/SingletonTest.php
- [Объектный пул / Object Pool](https://stepik.org/lesson/601517/step/2)
    - app/Patterns/Creational/ObjectPool
    - tests/Patterns/Creational/ObjectPoolTest.php
- [Ленивая инициализация / Lazy Initialization](https://stepik.org/lesson/601518/step/2)
    - app/Patterns/Creational/LazyInitialization
    - tests/Patterns/Creational/LazyInitializationTest.php
- [Мультитон / Multiton](https://stepik.org/lesson/601519/step/2)
    - app/Patterns/Creational/Multiton
    - tests/Patterns/Creational/MultitonTest.php
- [Получение ресурса есть инициализац / Resource acquisi](https://stepik.org/lesson/601520/step/2)
    - app/Patterns/Creational/ResourceAcquisi
    - tests/Patterns/Creational/ResourceAcquisiTest.php

### Структурные

- [Легковес / Flyweight](https://stepik.org/lesson/601525/step/2)
    - app/Patterns/Structure/Flyweight
    - tests/Patterns/Structure/FlyweightTest.php
- [Мост / Bridge](https://stepik.org/lesson/601526/step/2)
    - app/Patterns/Structure/Bridge
    - tests/Patterns/Structure/BridgeTest.php
- [Адаптер / Adapter](https://stepik.org/lesson/601527/step/2)
    - 1-й вариант:
        - app/Patterns/Structure/Adapter
        - tests/Patterns/Structure/AdapterTest.php
    - 2-й вариант:
        - app/Patterns/Structure/Adapter1
        - tests/Patterns/Structure/Adapter1Test.php
- [Компоновщик / Composite](https://stepik.org/lesson/601528/step/2)
    - app/Patterns/Structure/Composite
    - tests/Patterns/Structure/CompositeTest.php
- [Преобразователь данных / Data Mapper](https://stepik.org/lesson/601529/step/2)
    - app/Patterns/Structure/DataMapper
    - tests/Patterns/Structure/DataMapperTest.php
- [Декоратор / Decorator](https://stepik.org/lesson/601530/step/2)
    - 1-й вариант:
        - app/Patterns/Structure/Decorator
        - tests/Patterns/Structure/DecoratorTest.php
    - 2-й вариант:
        - app/Patterns/Structure/Decorator1
        - tests/Patterns/Structure/Decorator1Test.php
- [Внедрение зависимостей / Dependency Injection](https://stepik.org/lesson/601531/step/2)
    - app/Patterns/Structure/DependencyInjection
    - tests/Patterns/Structure/DependencyInjectionTest.php
- [Фасад / Facade](https://stepik.org/lesson/601532/step/2)
    - 1-й вариант:
        - app/Patterns/Structure/Facade
        - tests/Patterns/Structure/FacadeTest.php
    - 2-й вариант:
        - app/Patterns/Structure/Facade1
        - tests/Patterns/Structure/Facade1Test.php
- [Единая точка входа / Front Controller](https://stepik.org/lesson/601533/step/2)
    - app/Patterns/Structure/FrontController
    - tests/Patterns/Structure/FrontControllerTest.php
- [Заместитель / Proxy](https://stepik.org/lesson/601534/step/2)
    - app/Patterns/Structure/Proxy
    - tests/Patterns/Structure/ProxyTest.php
- [Текучий интерфейс / Fluent interface](https://stepik.org/lesson/601535/step/2)
    - app/Patterns/Structure/FluentInterface
    - tests/Patterns/Structure/FluentInterfaceTest.php
- [Приватный дата-класс / Private Data Class](https://stepik.org/lesson/601536/step/2)
    - app/Patterns/Structure/PrivateDataClass
    - tests/Patterns/Structure/PrivateDataClassTest.php
- [Реестр / Registry](https://stepik.org/lesson/601537/step/2)
    - app/Patterns/Structure/Registry
    - tests/Patterns/Structure/RegistryTest.php
- [Фильтр / Filter](https://stepik.org/lesson/601538/step/2)
    - app/Patterns/Structure/Filter
    - tests/Patterns/Structure/FilterTest.php
- [Бизнес делегат / Business Delegate](https://stepik.org/lesson/601539/step/2)
    - app/Patterns/Structure/BusinessDelegate
    - tests/Patterns/Structure/BusinessDelegateTest.php
- [Составной объект / Composite Object](https://stepik.org/lesson/601540/step/2)
    - app/Patterns/Structure/CompositeEntity
    - tests/Patterns/Structure/CompositeEntityTest.php
- [Объект доступа к данным / DAO](https://stepik.org/lesson/601541/step/2)
    - app/Patterns/Structure/Dao
    - tests/Patterns/Structure/DaoTest.php
- [Перехватывающий фильтр / Intercepting Filter](https://stepik.org/lesson/601542/step/2)
    - app/Patterns/Structure/InterceptingFilter
    - tests/Patterns/Structure/InterceptingFilterTest.php
- [Сервис локатор / Service Locator](https://stepik.org/lesson/601543/step/2)
    - app/Patterns/Structure/ServiceLocator
    - tests/Patterns/Structure/ServiceLocatorTest.php
- [Объект-значение / Value Object](https://stepik.org/lesson/601544/step/2)
    - app/Patterns/Structure/ValueObject
    - tests/Patterns/Structure/ValueObjectTest.php
- [Объект передачи данных / DTO](https://stepik.org/lesson/601545/step/2)
    - app/Patterns/Structure/Dto
    - tests/Patterns/Structure/DtoTest.php
- [Брокер / Broker](https://stepik.org/lesson/601546/step/2)
    - app/Patterns/Structure/Broker
    - tests/Patterns/Structure/BrokerTest.php
- [Сессионный фасад / Session Facade](https://stepik.org/lesson/601547/step/2)
    - app/Patterns/Structure/SessionFacade
    - tests/Patterns/Structure/SessionFacadeTest.php
- [Обработчик списка значений / Value List Handler](https://stepik.org/lesson/601548/step/2)
    - app/Patterns/Structure/ValueListHandler
    - tests/Patterns/Structure/ValueListHandlerTest.php
- [Каналы и фильтры / Pipes and Filters](https://stepik.org/lesson/601549/step/2)
    - app/Patterns/Structure/PipesAndFilterHandler
    - tests/Patterns/Structure/PipesAndFilterTest.php
- [Обвязка свойств / Binding Properties](https://stepik.org/lesson/601551/step/2)
    - app/Patterns/Structure/BindingProperties
    - tests/Patterns/Structure/BindingPropertiesTest.php

### Поведенческие

- [Цепочка обязанностей / Chain of Responsibility](https://stepik.org/lesson/601552/step/2)
    - app/Patterns/Behavioral/ChainResponsibility
    - tests/Patterns/Behavioral/ChainResponsibilityTest.php
- [Команда / Command](https://stepik.org/lesson/601553/step/2)
    - app/Patterns/Behavioral/Command
    - tests/Patterns/Behavioral/CommandTest.php
- [Итератор / Iterator](https://stepik.org/lesson/601555/step/2)
    - app/Patterns/Behavioral/Iterator
    - tests/Patterns/Behavioral/IteratorTest.php
- [Посредник / Mediator](https://stepik.org/lesson/601556/step/2)
    - app/Patterns/Behavioral/Mediator
    - tests/Patterns/Behavioral/MediatorTest.php
- [Хранитель / Memento](https://stepik.org/lesson/601557/step/2)
    - app/Patterns/Behavioral/Memento
    - tests/Patterns/Behavioral/MementoTest.php
- [Нуль-объект / Null object](https://stepik.org/lesson/601558/step/2)
    - app/Patterns/Behavioral/NullObject
    - tests/Patterns/Behavioral/NullObjectTest.php
- [Наблюдатель / Observer](https://stepik.org/lesson/601559/step/2)
    - app/Patterns/Behavioral/Observer
    - tests/Patterns/Behavioral/ObserverTest.php
- [Издатель-подписчик / Publisher-Subscriber](https://stepik.org/lesson/601560/step/2)
    - app/Patterns/Behavioral/PublisherSubscriber
    - tests/Patterns/Behavioral/PublisherSubscriberTest.php
- [Слуга / Servant](https://stepik.org/lesson/601561/step/2)
    - app/Patterns/Behavioral/Servant
    - tests/Patterns/Behavioral/ServantTest.php
- [Спецификация / Specification](https://stepik.org/lesson/601562/step/2)
    - app/Patterns/Behavioral/Specification
    - tests/Patterns/Behavioral/SpecificationTest.php
- [Состояние / State](https://stepik.org/lesson/601563/step/2)
    - 1-й вариант:
        - app/Patterns/Behavioral/State
        - tests/Patterns/Behavioral/StateTest.php
    - 2-й вариант:
        - app/Patterns/Behavioral/State1
        - tests/Patterns/Behavioral/State1Test.php
- [Стратегия / Strategy](https://stepik.org/lesson/601564/step/2)
    - app/Patterns/Behavioral/Strategy
    - tests/Patterns/Behavioral/StrategyTest.php
- [Шаблонный метод / Template method](https://stepik.org/lesson/601565/step/2)
    - app/Patterns/Behavioral/TemplateMethod
    - tests/Patterns/Behavioral/TemplateMethodTest.php
- [Посетитель / Visitor](https://stepik.org/lesson/601566/step/2)
    - app/Patterns/Behavioral/Visitor
    - tests/Patterns/Behavioral/VisitorTest.php
- [Одноразовый посетитель / Single serving visitor](https://stepik.org/lesson/601567/step/2)
    - app/Patterns/Behavioral/SingleServingVisitor
    - tests/Patterns/Behavioral/SingleServingVisitorTest.php
- [Иерархический посетитель / Hierarchical visitor](https://stepik.org/lesson/601568/step/2)
    - app/Patterns/Behavioral/HierarchicalVisitor
    - tests/Patterns/Behavioral/HierarchicalVisitorTest.php

## Запуск проекта

Перейти в папку **docker** и выполнить команду 
```
docker-compose up -d
```
после того как скачаются необходимые образы запустится контейнер **patterns-php**. Войти в 
контейнер командой 
```
docker exec -it patterns-php bash
```
и установить для начала необходимые пакеты
```
composer install
```
далее можно запускать необходимые тесты. Например:
```
php artisan test --filter SimpleFactoryTest
```
При необходимости ключ приложения можно обновить командой:
```
php artisan key:generate
```
## XDebug

Для PhPStorm IDE необходимо сделать следующие настройки:

1. Кнопка с телефоном(или жучком) в правом верхнем углу "Start Listening for PHP Debug Connections" 
должна быть зелёной/активной.
2. Необходимо настроить сервер - **Settings -> PHP -> Servers:**
- **Name**: **patterns** - параметр **PHP_IDE_CONFIG** из docker-compose.yaml
- **Host**: localhost
- **Port**: 80
- **Debugger**: Xdebug
- **Use path mappings** - необходимо сопоставить **/app** -> локальный путь на хост-машине,
например **/home/[user_name]/server/patterns.local**

После этого уже можно запускать тесты с отладкой:
```
XDEBUG_MODE=debug php artisan test --filter SimpleFactoryTest
```
где **XDEBUG_MODE** это параметр из docker-compose.yaml

или же сначала 
```
XDEBUG_MODE=debug
```
затем уже просто запускать тесты
```
php artisan test --filter SimpleFactoryTest
```
в рамках текущей сессии работы с контейнером **XDebug** будет отрабатывать.


#### Примечание

Порт 9003 может быть занят. Освободить его можно следующей командой:
```
sudo ufw allow 9003/tcp comment 'xdebug'
```
сделать это нужно на хост-машине вне контейнера.
