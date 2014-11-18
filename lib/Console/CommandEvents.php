<?php

namespace Lmc\Steward\Console;

/**
 * Contains all events dispatched by a Command.
 */
final class CommandEvents
{
    /**
     * The CONFIGURE event allows you to attach listeners right after any command is
     * configured. It allows you to add options or arguments to the command.
     *
     * The event listener method receives a Lmc\Steward\Console\Event\BasicConsoleEvent instance.
     *
     * @var string
     */
    const CONFIGURE = 'command.configure';

    /**
     * The RUN_TESTS_INIT event is dispatched after basic initialization of RunTests Command.
     * It allows you to eg. adjust the output on command initialization.
     *
     * The event listener method receives a Lmc\Steward\Console\Event\ExtendedConsoleEvent instance.
     *
     * @var string
     */
    const RUN_TESTS_INIT = 'command.run_tests_init';

    /**
     * The RUN_TESTS_PROCESS event is dispatched right after instance of each Process has been created.
     * It allows you to eg. pass additional arguments to the process.
     *
     * The event listener method receives a Lmc\Steward\Console\Event\RunTestsProcessEvent instance.
     *
     * @var string
     */
    const RUN_TESTS_PROCESS = 'command.run_tests_process';
}
