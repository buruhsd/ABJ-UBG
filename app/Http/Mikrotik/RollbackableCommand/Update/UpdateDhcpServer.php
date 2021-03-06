<?php


namespace App\Http\Mikrotik\RollbackableCommand\Update;


class UpdateDhcpServer extends BaseUpdateRollbackableCommand
{
    /**
     * @return string
     * command that will be ran
     */
    public function getRunCommand()
    {
        return "ip dhcp-server set";
    }

    /**
     * @return string
     */
    public function getRollbackCommand()
    {
        return "ip dhcp-server set";
    }

    /**
     * @return string
     */
    function name()
    {
        return 'Update DHCP Server';
    }
}