<?php

namespace TomaszKusy\En\SoapStubs;

/**
 * Class representing ElektronicznyNadawca
 *
 * @method \TomaszKusy\En\AddShipmentResponse addShipment(array $przesylki, int $idBufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\SendEnvelopeResponse sendEnvelope(int $urzadNadania, array $pakiet, int $idBufor, \TomaszKusy\En\ProfilType $profil, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEnvelopeBuforResponse getEnvelopeBufor(int $idBufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEnvelopeBuforListResponse getEnvelopeBuforList(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\CreateEnvelopeBuforResponse createEnvelopeBufor(array $bufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\UpdateEnvelopeBuforResponse updateEnvelopeBufor(array $bufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\ClearEnvelopeByGuidsResponse clearEnvelopeByGuids(array $guid, int $idBufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\ClearEnvelopeResponse clearEnvelope(int $idBufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\MoveShipmentsResponse moveShipments(int $idBuforFrom, int $idBuforTo, array $guid, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetAddressLabelResponse getAddressLabel(int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetAddresLabelCompactResponse getAddresLabelCompact(int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetOutboxBookResponse getOutboxBook(int $idEnvelope, bool $includeNierejestrowane, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetFirmowaPocztaBookResponse getFirmowaPocztaBook(int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEnvelopeStatusResponse getEnvelopeStatus(int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEnvelopeListResponse getEnvelopeList(\DateTime $startDate, \DateTime $endDate, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEnvelopeContentShortResponse getEnvelopeContentShort(int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEnvelopeContentFullResponse getEnvelopeContentFull(int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetKartyResponse getKarty(array $idKarta, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\SetAktywnaKartaResponse setAktywnaKarta(int $idKarta, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetUrzedyNadaniaResponse getUrzedyNadania(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetUrzedyWydajaceEPrzesylkiResponse getUrzedyWydajaceEPrzesylki(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\UploadIWDContentResponse uploadIWDContent(int $urzadNadania, string $iWDContent, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\DownloadIWDContentResponse downloadIWDContent(int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\ChangePasswordResponse changePassword(string $newPassword, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetPasswordExpiredDateResponse getPasswordExpiredDate(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\HelloResponse hello(string $in, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetAddresLabelByGuidResponse getAddresLabelByGuid(array $guid, int $idBufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetAddresLabelByGuidCompactResponse getAddresLabelByGuidCompact(array $guid, int $idBufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetPlacowkiPocztoweResponse getPlacowkiPocztowe(string $idWojewodztwo, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetGuidResponse getGuid(int $ilosc, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetKierunkiResponse getKierunki(string $plan, string $prefixKodPocztowy, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetKierunkiInfoResponse getKierunkiInfo(string $plan, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEPOStatusResponse getEPOStatus(bool $withBioepo, array $guid, bool $endedOnly, int $idEnvelope, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\SetEnvelopeBuforDataNadaniaResponse setEnvelopeBuforDataNadania(\DateTime $dataNadania, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetUbezpieczeniaInfoResponse getUbezpieczeniaInfo(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\IsMiejscowaResponse isMiejscowa(array $trasaRequest, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetBlankietPobraniaByGuidsResponse getBlankietPobraniaByGuids(array $guid, int $idBufor, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetAccountListResponse getAccountList(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\CreateAccountResponse createAccount(\TomaszKusy\En\AccountType $account, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\UpdateAccountResponse updateAccount(\TomaszKusy\En\AccountType $account, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetProfilListResponse getProfilList(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\CreateProfilResponse createProfil(\TomaszKusy\En\ProfilType $profil, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\UpdateProfilResponse updateProfil(\TomaszKusy\En\ProfilType $profil, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\AddReklamacjeResponse addReklamacje(array $reklamowanaPrzesylka, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\AddZalacznikDoReklamacjiResponse addZalacznikDoReklamacji(string $idReklamacja, array $zalacznik, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetReklamacjeResponse getReklamacje(\DateTime $dataRozpatrzenia, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\AddOdwolanieDoReklamacjiResponse addOdwolanieDoReklamacji(array $reklamacja, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\CancelReklamacjaResponse cancelReklamacja(int $idRelkamacja, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetListaPowodowReklamacjiResponse getListaPowodowReklamacji(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetZapowiedziFakturResponse getZapowiedziFaktur(\DateTime $data, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\AddRozbieznoscDoZapowiedziFakturResponse addRozbieznoscDoZapowiedziFaktur(array $rozbieznosciZipFile, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\ZamowKurieraResponse zamowKuriera(\TomaszKusy\En\AdresType $miejsceOdbioru, \TomaszKusy\En\AdresType $nadawca, string $oczekiwanaDataOdbioru, string $oczekiwanaGodzinaOdbioru, string $szacowanaIloscPrzeslek, string $szacowanaLacznaMasaPrzesylek, string $potwierdzenieZamowieniaEmail, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEZDOResponse getEZDO(int $idEZDOPakiet, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetEZDOListResponse getEZDOList(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetWplatyCKPResponse getWplatyCKP(string $numerNadania, \DateTime $startDate, \DateTime $stopDate, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\UpdateShopEZwrotyResponse updateShopEZwroty(\TomaszKusy\En\ShopEZwrotyType $shop, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetListaZgodEZwrotowResponse getListaZgodEZwrotow(string $status, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\SetStatusZgodyNaEZwrotResponse setStatusZgodyNaEZwrot(array $statusZgody, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\WyslijLinkaOStatusieEZwrotuResponse wyslijLinkaOStatusieEZwrotu(array $guidZgodaEZwrot, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\IsObszarMiastoResponse isObszarMiasto(array $adres, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetPaczkaKorzysciInfoResponse getPaczkaKorzysciInfo(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\SetJednostkaOrganizacyjnaResponse setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetJednostkaOrganizacyjnaResponse getJednostkaOrganizacyjna(\TomaszKusy\En\JednostkaOrganizacyjnaType $jednostka, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetPrintForParcelResponse getPrintForParcel(array $guid, \TomaszKusy\En\PrintType $type, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header) The method returns parcels printouts for passed 				guid's 			
 * @method \TomaszKusy\En\CreateShopEZwrotyResponse createShopEZwroty(\TomaszKusy\En\ShopEZwrotyType $shop, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\DeleteShopEZwrotyResponse deleteShopEZwroty(int $idShop, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetShopEZwrotyListResponse getShopEZwrotyList(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\GetLibrariesForLegalDepositsResponse getLibrariesForLegalDeposits(\GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 * @method \TomaszKusy\En\OrderEasyReturnSolutionLabelResponse orderEasyReturnSolutionLabel(\TomaszKusy\En\AddressType $senderAddress, \TomaszKusy\En\AddressType $recipientAddress, int $weight, \TomaszKusy\En\CustomsDeclarationType $customsDeclaration, \TomaszKusy\En\DeliveryMethodType $deliveryMethod, string $description, \GoetasWebservices\SoapServices\Metadata\Headers\Header ...$header)
 */
class ElektronicznyNadawca
{


}

